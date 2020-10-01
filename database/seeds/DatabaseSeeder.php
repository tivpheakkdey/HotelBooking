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
>>>>>>> 38604ce2618ce4930ec72bb498f56f84c6827d00
    }
}
