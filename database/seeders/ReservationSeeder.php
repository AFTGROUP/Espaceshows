<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reservations')->insert([
            [
                'id' => Str::uuid()->toString(),
               'date_reservation' => now(),
               'nom_utilisateur' => 'zinmonse',
               'prenom_utilisateur' => 'sylvie',
               'type_ticket_id' => '1',
               'mode_paiement' => 'moov',
               'user_id' => '2',
               'ticket_id' => '1',

           ],
        ]);
    }
}
