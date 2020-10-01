<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name"=>"testUser",
            "email"=>"testUser@gmail.com",
            "password"=>"$2y$10\$zDEZeClhAkHKVg2egBnlweaBSt9LDUT.5WJ5yYWKPFbhHqNhraRhu",
        ]);

        User::create([
            "name"=>"testAnotherUser",
            "email"=>"testAnotherUser@gmail.com",
            "password"=>"$2y$10\$zDEZeClhAkHKVg2egBnlweaBSt9LDUT.5WJ5yYWKPFbhHqNhraRhu",
        ]);
    }
}
