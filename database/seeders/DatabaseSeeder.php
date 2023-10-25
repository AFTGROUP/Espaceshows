<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
         \App\Models\User::factory(10)->create();

        //  $this->seed([
        //    RoleSeeder::class,
        // ]);


                $this->call([
                       RoleSeeder::class,
                       RoleUserSeeder::class,
                       TypeTicketsSeeder::class
                    ]);


    }
}
