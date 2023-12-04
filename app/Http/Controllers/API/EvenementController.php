<?php

namespace App\Http\Controllers\API;

use App\Models\Ticket;
use App\Models\Evenement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EvenementMedias;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class EvenementController extends Controller
{

    public function __construct()
    {
        $this->middleware('jwt.verify');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    /**
     * @OA\Post(
     *     path="/api/evenement",
     *     summary="Créer un nouvel événement avec des tickets",
     *     tags={"Événements"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="nom", type="string", maxLength=50, description="Nom de l'événement"),
     *             @OA\Property(property="pays", type="string", description="Pays de l'événement"),
     *             @OA\Property(property="ville", type="string", description="Ville de l'événement"),
     *             @OA\Property(property="description", type="string", description="Description de l'événement"),
     *             @OA\Property(property="date_debut", type="string", format="date", description="Date de début de l'événement"),
     *             @OA\Property(property="date_fin", type="string", format="date", description="Date de fin de l'événement"),
     *             @OA\Property(property="mots_cles", type="string", description="Mots-clés de l'événement"),
     *             @OA\Property(property="type_ticket", type="array", @OA\Items(type="string", description="Type de ticket")),
     *             @OA\Property(property="prix_ticket", type="array", @OA\Items(type="number", description="Prix de chaque ticket")),
     *             @OA\Property(property="nombre_place_disponible", type="integer", description="Nombre de places disponibles"),
     *             @OA\Property(property="type_evenement_id", type="integer", description="ID du type d'événement associé")
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Événement enregistré avec succès"
     *     ),
     *     @OA\Response(
     *         response="422",
     *         description="Erreurs de validation",
     *         @OA\JsonContent(
     *             @OA\Property(property="Erreurs de validation", type="object", description="Liste des erreurs de validation")
     *         )
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Erreur interne du serveur",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Erreur interne du serveur")
     *         )
     *     )
     * )
     */

    //Enregistrement d'un évènement
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required|max:50',
            'pays' => 'required',
            'ville' => 'required',
            'description' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'mots_cles' => 'required',
            'type_evenement_id' => 'required|exists:type_evenements,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nombre_place_disponible' => 'required|numeric',
            'statut' => 'required',
            'tickets' => 'required|array|min:1',
        ], [
            'required' => 'Le champ :attribute est requis.',
            'numeric' => 'Le champ :attribute doit être numérique.',
            'exists' => 'Le :attribute sélectionné est invalide.',
            'image' => 'Le champ :attribute doit être une image.',
            'mimes' => 'Le champ :attribute doit être de type jpeg, png, jpg, gif ou svg.',
            'max' => 'Le champ :attribute ne doit pas dépasser 2 Mo.',
            'tickets.required' => 'Au moins un ticket est requis.',
            'tickets.array' => 'Le champ tickets doit être un tableau.',
            'tickets.min' => 'Au moins un ticket est requis dans le tableau.',
            'tickets.*.type_ticket_id.required' => 'Le champ type_ticket_id du ticket est requis.',
            'tickets.*.type_ticket_id.integer' => 'Le champ type_ticket_id du ticket doit être un entier.',
            'tickets.*.type_ticket_id.exists' => 'Le type_ticket sélectionné pour le ticket est invalide.',
            'tickets.*.prix_ticket.required' => 'Le champ prix_ticket du ticket est requis.',
            'tickets.*.prix_ticket.numeric' => 'Le champ prix_ticket du ticket doit être numérique.',
            'tickets.*.prix_ticket.min' => 'Le champ prix_ticket du ticket doit être au moins :min.',
            'tickets.*.nombre_ticket_disponible.required' => 'Le champ nombre_ticket_disponible du ticket est requis.',
            'tickets.*.nombre_ticket_disponible.integer' => 'Le champ nombre_ticket_disponible du ticket doit être un entier.',
            'tickets.*.nombre_ticket_disponible.min' => 'Le champ nombre_ticket_disponible du ticket doit être au moins :min.',
        ]);

        // foreach ($request->input('tickets') as $index => $ticket) {
        //     $ticketValidator = Validator::make($ticket, [
        //         'type_ticket_id' => 'required|integer|exists:type_tickets,id',
        //         'prix_ticket' => 'required|numeric|min:0',
        //         'nombre_ticket_disponible' => 'required|integer|min:1',
        //     ]);

        //     if ($ticketValidator->fails()) {
        //         $validator->errors()->add("tickets.{$index}", "Invalid ticket data at index {$index}. " . implode(' ', $ticketValidator->errors()->all()));
        //     }
        // }

        if ($validator->fails()) {
            return response()->json(['Erreurs de validation' => $validator->errors()], 422);
        }

        $code = mt_rand(100000, 999999);

        $evenement = new Evenement();
        $evenement->code = $code;
        $evenement->nom = $request->nom;
        $evenement->pays = $request->pays;
        $evenement->ville = $request->ville;
        $evenement->description = $request->description;
        $evenement->date_debut = $request->date_debut;
        $evenement->date_fin = $request->date_fin;
        $evenement->mots_cles = $request->mots_cles;
        $evenement->statut = $request->statut;
        $evenement->type_evenement_id = $request->type_evenement_id;
        $evenement->nombre_place_disponible = $request->nombre_place_disponible;
        $evenement->user_id = Auth::user()->id;
        $evenement->save();


        //Evenement médias
        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $path = Storage::putFileAs('photos', $file, $name);
        $evenementMedia = new EvenementMedias([
            'nom' => $name,
            'path' => $path,
        ]);
        $evenementMedia->evenement()->associate($evenement->id);



        // Enregistrez les tickets
        $tickets = $request->input('tickets');

       // var_dump($tickets);

        foreach ($tickets as $ticketData) {
            $ticket = new Ticket();
            $ticket->code = $code;
            $ticket->type_ticket_id = $ticketData['type_ticket_id'];
            $ticket->prix_ticket = $ticketData['prix_ticket'];
            $ticket->nombre_ticket_disponible = $ticketData['nombre_ticket_disponible'];
            $ticket->evenement_id = $evenement->id;
            $ticket->save();
        }


        return response()->json(["message" => "Événement enregistré avec succès"], 200);
    }

    public function listeParticipant()
    {
        // Récupérez l'utilisateur connecté (qui a le rôle d'organisateur)
        $organisateur = Auth::user();

        // Récupérez tous les événements associés à l'organisateur
        $evenementsOrganisateur = Evenement::where('organisateur_id', $organisateur->id)->get();

        // Initialisez un tableau pour stocker la liste des participants pour tous les événements
        $participants = [];

        foreach ($evenementsOrganisateur as $evenement) {
            // Récupérez les participants pour chaque événement
            $participants[$evenement->nom] = $evenement->tickets->map(function ($ticket) {
                return $ticket->user;
            });
        }

        return response()->json($participants);
    }




    //Ajouter historistique des commandes par organisateur
    public function historiqueCommandes()
    {
        // Récupérez l'utilisateur connecté (qui a le rôle d'organisateur)
        $organisateur = Auth::user();

        // Récupérez tous les événements associés à l'organisateur
        $evenementsOrganisateur = Evenement::where('organisateur_id', $organisateur->id)->get();

        // Initialisez un tableau pour stocker l'historique des commandes
        $historiqueCommandes = [];

        foreach ($evenementsOrganisateur as $evenement) {
            // Récupérez les commandes pour chaque événement
            $commandes = Ticket::where('evenement_id', $evenement->id)->get();

            // Pour chaque commande, récupérez les détails nécessaires
            foreach ($commandes as $commande) {
                // Vous pouvez ajouter les détails de la commande au tableau d'historique
                $historiqueCommandes[] = [
                    'evenement' => $evenement->nom,
                    'participant' => $commande->participant->nom,  // Assurez-vous que votre modèle de commande contient une relation avec le participant
                ];
            }
        }

        return response()->json($historiqueCommandes);
    }






    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
