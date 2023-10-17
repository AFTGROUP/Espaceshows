<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\TypeEvenement;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TypeEvenementController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
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
 *     path="/api/type",
 *     summary="Créer un nouveau type d'événement",
 *     tags={"Événements"},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             @OA\Property(property="nom", type="string", maxLength=50, description="Nom du type d'événement")
 *         )
 *     ),
 *     @OA\Response(
 *         response="200",
 *         description="Type d'événement enregistré avec succès"
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
        ], [
            'required' => 'Le champ :attribute est requis.',
        ]);

        if($validator->fails()) {
            return response()->json(['Erreurs de validation' => $validator->errors()], 400);
        }

        $type = new TypeEvenement();
        $type->nom = $request->nom;
        $type->save();
        return response()->json(["message" => "Type evenement enregistrer avec succès"], 200);
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
