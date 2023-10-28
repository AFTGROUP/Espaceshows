<?php

use Illuminate\Database\Seeder;
use App\Models\Reservation;
use Illuminate\Support\Str;

class ReservationsSeeder extends Seeder
{
    public function run()
    {
<<<<<<< HEAD
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
=======
        // DB::table('reservations')->insert([
        //     [
        //         'id' => Str::uuid()->toString(),
        //        'date_reservation' => now(),
        //        'nom_utilisateur' => 'zinmonse',
        //        'prenom_utilisateur' => 'sylvie',
        //        'type_ticket_id' => '1',
        //        'mode_paiement' => 'moov',
        //        'user_id' => '2',
        //        'ticket_id' => '1',

        //    ],
        // ]);
>>>>>>> 87ed65c7c6b6a17fb83e6101e6319df47b586750
    }
}
