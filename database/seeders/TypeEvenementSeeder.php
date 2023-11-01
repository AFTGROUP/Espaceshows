<?php

namespace Database\Seeders;

use App\Traits\UUID;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeEvenementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('type_evenements')->insert([
            [
                'id' => Str::uuid()->toString(),
                'nom' => 'concert',
            ],

            [
                'id' => Str::uuid()->toString(),
                'nom' => 'chill',
            ],
        ]);
    }
}
