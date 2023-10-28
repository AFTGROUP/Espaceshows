<?php

use Illuminate\Database\Seeder;
use App\Models\Reservation;
use Illuminate\Support\Str;

class ReservationsSeeder extends Seeder
{
    public function run()
    {
        Reservation::create([
            'id' => Str::uuid()->toString(),
            'date_reservation' => now(),
            'nom_utilisateur' => 'Nom Utilisateur',
            'prenom_utilisateur' => 'Prénom Utilisateur',
            'type_ticket_id' => 1, // ID du type de ticket
            'mode_paiement' => 'Moov', // Mode de paiement
            'user_id' => 1, // ID de l'utilisateur
            'ticket_id' => 1, // ID du ticket
        ]);
    }
}
