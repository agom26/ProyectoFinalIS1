<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useradmin=User::create([
            'name'=>'administrador',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('Pepian'),
            'tipo'=>'1',
        ]);

        $user1=User::create([
            'name'=>'cliente',
            'email'=>'cliente@gmail.com',
            'password'=>Hash::make('pizza'),
            'tipo'=>'2',
        ]);

    }
}
