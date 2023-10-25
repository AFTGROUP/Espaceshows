<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $users = User::take(4)->get();

        // Obtenez tous les rôles de la table 'roles'
        $roles = Role::all();

        // Assurez-vous qu'il y a au moins 5 rôles disponibles
        if (count($roles) >= 4) {
            // Assurez-vous que le nombre de rôles disponibles correspond au nombre d'utilisateurs
            foreach ($users as $key => $user) {
                $user->roles()->attach($roles[$key]->id);
            }
        }

    }
}
