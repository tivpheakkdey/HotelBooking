<?php

use Illuminate\Database\Seeder;
use App\Booking;

class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Booking::create([
            'user_id'=> 1,
            'room_id'=> 1,
            'arrival_date' => '2020-10-03',
            'departure_date' => '2020-10-05',
            'num_room' => '2',
            'amount' => '1000',
        ]);

        Booking::create([
            'user_id'=> 1,
            'room_id'=> 2,
            'arrival_date' => '2020-10-04',
            'departure_date' => '2020-10-10',
            'num_room' => '3',
            'amount' => '3600',
        ]);

        Booking::create([
            'user_id'=> 1,
            'room_id'=> 3,
            'arrival_date' => '2020-10-03',
            'departure_date' => '2020-10-05',
            'num_room' => '1',
            'amount' => '1500',
        ]);

        Booking::create([
            'user_id'=> 2,
            'room_id'=> 4,
            'arrival_date' => '2020-10-04',
            'departure_date' => '2020-10-10',
            'num_room' => '4',
            'amount' => '4800',
        ]);

        Booking::create([
            'user_id'=> 2,
            'room_id'=> 3,
            'arrival_date' => '2020-10-03',
            'departure_date' => '2020-10-05',
            'num_room' => '1',
            'amount' => '1500',
        ]);
    }
}
