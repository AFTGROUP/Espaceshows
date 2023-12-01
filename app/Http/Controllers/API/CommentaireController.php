<?php

namespace App\Http\Controllers\API;
use App\Models\Commentaire;
use App\Models\User;
use App\Models\Evenement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class CommentaireController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt.verify');
    }

    public function index()
    {
        try {
            // Récupérer la liste complète des commentaires
            $commentaires = Commentaire::all();
    
            return response()->json($commentaires, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Une erreur s\'est produite.'], 500);
        }
    }

    public function show($id)
    {
        // Récupérer un commentaire spécifique par ID
        $commentaire = Commentaire::findOrFail($id);
        return response()->json($commentaire);
    }

    public function store(Request $request)
    {
        // Valider les données entrées
        $validator = Validator::make($request->all(), [
            'contenu' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'evenement_id' => 'required|exists:evenements,id',
        ], [
            'required' => 'Le champ :attribute est requis.',
            'exists' => 'L\'élément avec l\'identifiant :attribute n\'existe pas.',
        ]);

        if ($validator->fails()) {
            return response()->json(['Erreurs de validation' => $validator->errors()], 400);
        }

        $user = Auth::user();

        // Enregistrez le commentaire
        $commentaire = new Commentaire();
        $commentaire->id = \Illuminate\Support\Str::uuid(); // Génération de l'ID UUID
        $commentaire->contenu = $request->contenu;
        $commentaire->user_id = $user->id;
        $commentaire->evenement_id = $request->evenement_id;
        $commentaire->save();

        return response()->json(["message" => "Commentaire enregistré avec succès"], 200);
    }

    public function update(Request $request, $id)
    {
        // Valider les données entrées
        $validator = Validator::make($request->all(), [
            'contenu' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'evenement_id' => 'required|exists:evenements,id',
        ], [
            'required' => 'Le champ :attribute est requis.',
            'exists' => 'L\'élément avec l\'identifiant :attribute n\'existe pas.',
        ]);

        if ($validator->fails()) {
            return response()->json(['Erreurs de validation' => $validator->errors()], 400);
        }

        // Trouver le commentaire existant
        $commentaire = Commentaire::findOrFail($id);

        // Mettre à jour le commentaire
        $commentaire->update($request->all());

        return response()->json($commentaire);
    }

    public function destroy($id)
    {
        // Supprimer un commentaire
        $commentaire = Commentaire::findOrFail($id);
        $commentaire->delete();
        return response()->json(null, 204);
    }

    public function getCommentsByEvent($evenement_id)
    {
        try {
            // Récupérer tous les commentaires associés à un événement spécifique
            $commentaires = Commentaire::where('evenement_id', $evenement_id)->get();

            return response()->json($commentaires, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Une erreur s\'est produite.'], 500);
        }
    }

}
