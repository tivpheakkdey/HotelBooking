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
<<<<<<< HEAD
=======
>>>>>>> fda8c1e... Created seeder for room
=======
>>>>>>> f42dab3... implement the room controller, route, and view
=======
>>>>>>> 44d92500d082e5a91f8b968ac1dce1ce380fda83
    }
}
