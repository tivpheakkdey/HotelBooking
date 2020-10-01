<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoomsTableSeeder::class);
<<<<<<< HEAD
        $this->call(UsersTableSeeder::class);
=======
>>>>>>> fda8c1e... Created seeder for room
    }
}
