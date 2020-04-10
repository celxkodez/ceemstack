<?php

use App\User;
use App\User_profile;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        //default users seeds

        $user2 = User::create([
            'name' => 'Agnes Gibson',
            'email' => 'Agnes.Gibson@email.com',
            'password' => bcrypt('secret'),

        ]);
        User_profile::create([
            'user_id' => $user2->id,
            'avater' => 'uploads/user/avatars/avatar.png'

        ]);

        $user3 = User::create([
            'name' => 'Michael Johnson',
            'email' => 'Michael.Johnson@email.com',
            'password' => bcrypt('secret'),

        ]);
        User_profile::create([
            'user_id' => $user3->id,
            'avater' => 'uploads/user/avatars/avatar.png'

        ]);


        // the default mentors 
        // factory('App\User', 5)->create();
        $user1 = User::create([
            'name' => 'Rayor Muhammed',
            'email' => 'Rayor.Muhammed@email.com',
            'password' => bcrypt('secret'),
            'role' => 1

        ]);
        User_profile::create([
            'user_id' => $user1->id,
            'avater' => 'uploads/user/avatars/avatar.png'

        ]);





        

        // super admin user

        $user = User::create([
            'name' => 'Celestine Stephen',
            'email' => 'example@email.com',
            'password' => bcrypt('secret'),
            'role' => 3

        ]);
        User_profile::create([
            'user_id' => $user->id,
            'avater' => 'uploads/user/avatars/avatar.png'

        ]);


    }
}
