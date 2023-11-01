<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EvenementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('evenements')->insert([
            [
                'id' => Str::uuid()->toString(),
                'code' => '120341',
                'nom' => 'concert',
                'pays' => 'Bénin',
                'ville' => 'Cotonou',
                'photo' => 'Capture d’écran 2023-10-25 194249.png',
                'description' => 'concert pour amuser',
                'date_debut' => '2023-12-21',
                'date_fin' => '23-12-22',
                'mots_cles' => 'concert',
                'nombre_place_disponible' => '100',
                'statut' => 'en cours',
                'type_evenement_id' => '',
                'user_id' => '',
            ],

            [
                'id' => Str::uuid()->toString(),
                'code' => '785896',
                'nom' => 'chill',
                'pays' => 'Bénin',
                'ville' => 'Cotonou',
                'description' => 'chill couleur',
                'date_debut' => '2023-12-24',
                'date_fin' => '23-12-25',
                'mots_cles' => 'chill',
                'nombre_place_disponible' => '100',
                'statut' => 'en cours',
                'type_evenement_id' => '2',
                'user_id' => '1',
            ],
        ]);
    }
}
