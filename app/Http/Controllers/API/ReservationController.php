<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Http\Controllers\Controller;




class ReservationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        $reservations = Reservation::all();
        return response()->json($reservations);
    }

    public function show($id)
    {
        $reservation = Reservation::find($id);
        if (!$reservation) {
            return response()->json(['message' => 'Réservation non trouvée'], 404);
        }
        return response()->json($reservation);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'type_ticket' => 'required|in:Option 1,Option 2,Option 3',
            'mode_paiement' => 'required|in:Feda Pay,KkiPay',
        ]);

        $reservation = new Reservation();
        $reservation->fill($validatedData);
        $reservation->save();

        return response()->json(['message' => 'Réservation créée avec succès'], 201);
    }

    public function update(Request $request, $id)
    {
        $reservation = Reservation::find($id);
        if (!$reservation) {
            return response()->json(['message' => 'Réservation non trouvée'], 404);
        }

        $validatedData = $request->validate([
            'nom' => 'string|max:255',
            'prenom' => 'string|max:255',
            'email' => 'email|max:255',
            'type_ticket' => 'in:Option 1,Option 2,Option 3',
            'mode_paiement' => 'in:Feda Pay,KkiPay',
        ]);

        $reservation->update($validatedData);
        return response()->json($reservation);
    }

    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        if (!$reservation) {
            return response()->json(['message' => 'Réservation non trouvée'], 404);
        }

        $reservation->delete();
        return response()->json(['message' => 'Réservation supprimée']);
    }
}
