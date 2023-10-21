<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Http\Controllers\Controller;


class ReservationController extends Controller
{

    public function __construct()
    {
        $this->middleware('jwt.verify');
    }
    
    public function index()
    {
        // Récupérer la liste des réservations
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
        // Valider et enregistrer une nouvelle réservation
        $request->validate([
            'date_reservation' => 'required|date',
            'nom_utilisateur' => 'required|string',
            'prenom_utilisateur' => 'required|string',
            'type_ticket' => 'required|string',
            'mode_paiement' => 'required|in:FedaPay,Kkiapay',
            'user_id' => 'required|exists:users,id',
            'ticket_id' => 'required|exists:tickets,id',
        ]);

        $reservation = Reservation::create($request->all());
        return response()->json($reservation, 201);
    }

    public function update(Request $request, $id)
    {
        // Valider et mettre à jour une réservation existante
        $reservation = Reservation::findOrFail($id);
        $request->validate([
            'date_reservation' => 'required|date',
            'nom_utilisateur' => 'required|string',
            'prenom_utilisateur' => 'required|string',
            'type_ticket' => 'required|string',
            'mode_paiement' => 'required|in:FedaPay,Kkiapay',
            'user_id' => 'required|exists:users,id',
            'ticket_id' => 'required|exists:tickets,id',
        ]);

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
