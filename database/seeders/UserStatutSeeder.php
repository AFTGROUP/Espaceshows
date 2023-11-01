<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserStatutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('user_statuts')->insert([
            [
                 'id' => Str::uuid()->toString(),
                'statut' => 'active',
            ],

            [
                'id' => Str::uuid()->toString(),
               'nom' => 'desactive',
            ],


        ]);

    }
}
