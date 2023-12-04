<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Commentaire;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserStatutSeeder::class);
         \App\Models\User::factory(10)->create();

        //  $this->seed([
        //    RoleSeeder::class,
        // ]);


                $this->call([
                       RoleSeeder::class,
                       RoleUserSeeder::class,
                       TypeTicketsSeeder::class,
                       TypeEvenementSeeder::class,
                       EvenementSeeder::class,
                       TicketSeeder::class
                    ]);


    }
}
