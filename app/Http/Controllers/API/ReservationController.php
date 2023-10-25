<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class ReservationController extends Controller
{

    public function __construct()
    {
        $this->middleware('jwt.verify');
    }
    
    public function index()
    {
        // Récupérer la liste complète des réservations
        $reservations = Reservation::all();
        return response()->json($reservations);
    }
    
    public function show($id)
    {
        // Récupérer une réservation spécifique par ID
        $reservation = Reservation::findOrFail($id);
        return response()->json($reservation);
    }

    public function store(Request $request)
{
    // Valider les données entrées
    $validator = Validator::make($request->all(), [
        'date_reservation' => 'required|date',
        'nom_utilisateur' => 'required|string',
        'prenom_utilisateur' => 'required|string',
        'type_ticket_id' => 'required|exists:type_tickets,id',
        'mode_paiement' => 'required|in:Moov,MTN',
        'user_id' => 'required|exists:users,id',
        'ticket_id' => 'required|exists:tickets,id',
    ], [
        'required' => 'Le champ :attribute est requis.',
        'date' => 'Le champ :attribute doit être une date valide.',
        'exists' => 'L\'élément avec l\'identifiant :attribute n\'existe pas.',
        'in' => 'La valeur du champ :attribute doit être Moov ou MTN.'
    ]);

    if ($validator->fails()) {
        return response()->json(['Erreurs de validation' => $validator->errors()], 400);
    }


    // Enregistrez la réservation
    $reservation = new Reservation();
    $reservation->id = \Illuminate\Support\Str::uuid(); // Génération de l'ID UUID
    $reservation->date_reservation = $request->date_reservation;
    $reservation->nom_utilisateur = $request->nom_utilisateur;
    $reservation->prenom_utilisateur = $request->prenom_utilisateur;
    $reservation->type_ticket_id = $request->type_ticket_id;
    $reservation->mode_paiement = $request->mode_paiement;
    $reservation->user_id = $request->user_id;
    $reservation->ticket_id = $request->ticket_id;
    $reservation->save();

    // Vous pouvez également enregistrer les tickets associés ici si nécessaire

    return response()->json(["message" => "Réservation enregistrée avec succès"], 200);
}

public function update(Request $request, $id)
    {
    // Valider les données entrées
    $validator = Validator::make($request->all(), [
        'date_reservation' => 'required|date',
        'nom_utilisateur' => 'required|string',
        'prenom_utilisateur' => 'required|string',
        'type_ticket_id' => 'required|exists:type_tickets,id',
        'mode_paiement' => 'required|in:Moov,MTN',
        'user_id' => 'required|exists:users,id',
        'ticket_id' => 'required|exists:tickets,id',
    ], [
        'required' => 'Le champ :attribute est requis.',
        'date' => 'Le champ :attribute doit être une date valide.',
        'exists' => 'L\'élément avec l\'identifiant :attribute n\'existe pas.',
        'in' => 'La valeur du champ :attribute doit être Moov ou MTN.'
    ]);

    if ($validator->fails()) {
        return response()->json(['Erreurs de validation' => $validator->errors()], 400);
    }

    // Trouver la réservation existante
    $reservation = Reservation::findOrFail($id);

    // Mettre à jour la réservation
    $reservation->update($request->all());

    return response()->json($reservation);
}


    public function destroy($id)
    {
        // Supprimer une réservation
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();
        return response()->json(null, 204);
    }
}
