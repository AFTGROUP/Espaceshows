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

    /**
     * Affiche tous les commentaires d'un événement avec les utilisateurs associés.
     *
     * @param  string  $evenementId
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCommentairesByEvenement($evenementId)
    {
        $commentaires = Commentaire::where('evenement_id', $evenementId)->with('user')->get();

        return response()->json($commentaires);
    }

    /**
     * Ajoute un nouveau commentaire à un événement.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addCommentaire(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'contenu' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'evenement_id' => 'required|exists:evenements,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $commentaire = Commentaire::create($request->all());

        return response()->json($commentaire, 201);
    }

    /**
     * Met à jour un commentaire existant.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $commentaireId
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateCommentaire(Request $request, $commentaireId)
    {
        $validator = Validator::make($request->all(), [
            'contenu' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'evenement_id' => 'required|exists:evenements,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $commentaire = Commentaire::findOrFail($commentaireId);
        $commentaire->update($request->all());

        return response()->json($commentaire);
    }

    /**
     * Supprime un commentaire existant.
     *
     * @param  string  $commentaireId
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteCommentaire($commentaireId)
    {
        $commentaire = Commentaire::findOrFail($commentaireId);
        $commentaire->delete();

        return response()->json(null, 204);
    }
}
