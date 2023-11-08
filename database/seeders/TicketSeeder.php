<?php

namespace Database\Seeders;

use App\Models\Evenement;
use App\Models\TypeTickets;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $evenement = Evenement::first()->id;

        DB::table('tickets')->insert([
            [
                'id' => Str::uuid()->toString(),
                'code' => '120381',
                'type_ticket_id' => TypeTickets::where('nom', 'simple')->first()->id,
                'prix_ticket' => 5000,
                'nombre_ticket_disponible' => 50,
                'evenement_id' => $evenement,
            ],

            [
                'id' => Str::uuid()->toString(),
                'code' => '120341',
                'type_ticket_id' => TypeTickets::where('nom', 'standard')->first()->id,
                'prix_ticket' => 10000,
                'nombre_ticket_disponible' => 50,
                'evenement_id' => $evenement,
            ],

            [
                'id' => Str::uuid()->toString(),
                'code' => '785896',
                'type_ticket_id' => TypeTickets::where('nom', 'vip')->first()->id,
                'prix_ticket' => '5000',
                'nombre_ticket_disponible' => 50,
                'evenement_id' => $evenement,
            ],
        ]);

    }
}
