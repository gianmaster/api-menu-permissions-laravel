<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = array(
            'firstname' => 'Giancarlos',
            'lastname' => 'Cercado',
            'email' => 'giancarloscercado@gmail.com',
            'password' => Hash::make('password')
        );

        User::create($user);
        
    }
}
