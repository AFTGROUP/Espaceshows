<?php

namespace Database\Seeders;

use App\Traits\UUID;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('roles')->insert([
            [
                 'id' => Str::uuid()->toString(),
                'nom' => 'admin',
            ],

            [
                'id' => Str::uuid()->toString(),
               'nom' => 'organisateur',
            ],

            [

                'id' => Str::uuid()->toString(),
                'nom' => 'participant'

            ],

            [
                'id' => Str::uuid()->toString(),
                'nom' => 'acheteur'

            ],
        ]);
    }
}
