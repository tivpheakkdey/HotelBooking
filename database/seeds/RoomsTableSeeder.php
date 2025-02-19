<?php

use Illuminate\Database\Seeder;
use App\Room;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::create([
            "title"=>"Double Deluxe Room",
            "description"=>"This is a one-room suite with queen-size bed and comfortable seating area. It is located downstairs with an outside entrance and is wheelchair assessable. It has a 39-inch flat screen TV and electric fireplace. The butler kitchen (refrigerator, microwave, Keurig coffee brewer are provided). Coffee, tea and amenities are supplied. The large bathroom has a 60-inch shower (no tub). The entire suite is designed in a fashion to allow mobility impaired accessibility.",
            "No"=>10,
            "image"=>"images/rooms/doubleSuite.jpg",
            "price"=>250,
            ]);

        Room::create([
            "title"=>"Single Deluxe Room",
            "description"=>"1 single bed, free WiFi, TV, a work desk and a private bathroom with shower.24h reception, seif in reception, luggage keep, umbrella rental, iron and ironing board rental, wake-up call, laundry, taxy, fax/copy service, airport transfer (additional fees may apply)please notice, that single rooms do not accommodate extra beds/baby cots. Kids under the age of 6 accommodate, with sharing a parents bed, free of charge.",
            "No"=>10,
            "image"=>"images/rooms/singleSuite.jpg",
            "price"=>200,
            ]);

        Room::create([
            "title"=>"Honeymoon Suit",
            "description"=>"Specially designed for those who choose our resort to spend their honeymoon, these rooms are deliver premium comfort and facilities. Superior deluxe honeymoon suites are assured to provide you a memorable stay with the sensuous ambiance it encompasses.",
            "No"=>10,
            "image"=>"images/rooms/honeymoonSuite.jpg",
            "price"=>750,
            ]);

        Room::create([
            "title"=>"Economy Double",
            "description"=>"These rooms will remind you of a time when luxury was a way of life style. Furnished with an elegant queen bed and exclusive furnishings along with fine fabrics to ensure the comfort, these rooms feature extensive layout of contemporary amenities and furniture. Designed for two adults, this room is one of the master pieces of our resort. What is more, have a great view over the city through the windows in the balcony. Facilitated with all the necessities, you will find it ideal for a weekend gateway.",
            "No"=>10,
            "image"=>"images/rooms/EconomySuite.jpg",
            "price"=>200,
            ]);
    }
}
