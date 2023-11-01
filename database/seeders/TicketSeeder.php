<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tickets')->insert([
            [
                'id' => Str::uuid()->toString(),
                'code' => '120341',
                'type_ticket_id' => '1',
                'prix_ticket' => '5000',
                'nombre_ticket_disponible' => '50',
                'evenement_id' => '',
            ],

            [
                'id' => Str::uuid()->toString(),
                'code' => '120341',
                'type_ticket_id' => '2',
                'prix_ticket' => '10000',
                'nombre_ticket_disponible' => '50',
                'evenement_id' => '',
            ],

            [
                'id' => Str::uuid()->toString(),
                'code' => '785896',
                'type_ticket_id' => '1',
                'prix_ticket' => '5000',
                'nombre_ticket_disponible' => '50',
                'evenement_id' => '',
            ],

            [
                'id' => Str::uuid()->toString(),
                'code' => '785896',
                'type_ticket_id' => '1',
                'prix_ticket' => '10000',
                'nombre_ticket_disponible' => '50',
                'evenement_id' => '',
            ],
        ]);
    }
}
