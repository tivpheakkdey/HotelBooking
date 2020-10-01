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
        $this->call(UsersTableSeeder::class);
<<<<<<< HEAD
=======
>>>>>>> fda8c1e... Created seeder for room
=======
>>>>>>> f42dab3... implement the room controller, route, and view
    }
}
