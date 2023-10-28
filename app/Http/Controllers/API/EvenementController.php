<?php

namespace App\Http\Controllers\API;

use App\Models\Ticket;
use App\Models\Evenement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
            'type_ticket' => 'required',
            'prix_ticket' => 'required',
            'nombre_place_disponible' => 'required',
            'type_evenement_id' => 'required|exists:type_evenements,id',
        ], [
            'required' => 'Le champ :attribute est requis.',
            'numeric' => 'Le champ :attribute doit être numérique.',
            'exists' => 'Le type_evenement avec l\'identifiant '.$request->social_id.' n\'existe pas.',
        ]);

        if($validator->fails()) {
            return response()->json(['Erreurs de validation' => $validator->errors()], 400);
        }

        $code = mt_rand(100000, 999999);

        $path = $request->file('photo')->store('Photos', 'public');
        $evenement = new Evenement();
        $evenement->code = $code;
        $evenement->nom = $request->nom;
        $evenement->pays = $request->pays;
        $evenement->ville = $request->ville;
        $evenement->description = $request->description;
        $evenement->photo = $path;
        $evenement->date_debut = $request->date_debut;
        $evenement->date_fin = $request->date_fin;
        $evenement->mots_cles = $request->mots_cles;
        $evenement->nombre_place_disponible = $request->nombre_place_disponible;
        $evenement->type_evenement_id = $request->type_evenement_id;
        $evenement->save();

        // Enregistrez les tickets
        $type_tickets = $request->input('type_ticket');
        $prix_tickets = $request->input('prix_ticket');

        if (!empty($type_tickets) && is_array($type_tickets) && count($type_tickets) === count($prix_tickets)) {
            foreach ($type_tickets as $key => $type_ticket) {
                $ticket = new Ticket();
                $ticket->code = $code;
                $ticket->type_ticket = $type_ticket;
                $ticket->prix_ticket = $prix_tickets[$key];
                $ticket->evenement_id = $evenement->id;
                $ticket->save();
            }
        }

        return response()->json(["message" => "Événement enregistré avec succès"], 200);
    }

    //Ajouter historistique des commandes par organisateur

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
