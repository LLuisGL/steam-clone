<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Role;
use App\Models\Carro;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class AdminUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rolAdmin = Role::where('role', 'ADMINISTRADOR')->first();
        if (!$rolAdmin) {
            $rolAdmin = Role::create([
                'nombre' => 'ADMINISTRADOR',
                
            ]);
        }

        $usuarioAdmin = User::create([
            'name' => 'Administrador',
            'username' => 'AdminUees1',
            'email' => 'admin@uees.com',
            'password' => 'Admin123', 
        ]);

        $usuarioAdmin->roles()->attach($rolAdmin->id);
        Carro::create([
            'id_usuario' => $usuarioAdmin->id
        ]);
    }
}
