<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Flight;
use App\Models\Destination;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /*$obj = new Flight;
       $obj->name = 'Delhi-Goa';
       $obj->number = '45712';
       $obj->departure = 'Delhi';
       $obj->destination = 'Goa';
       $obj->price = '2000';
       $obj->active = '1';
       $obj->departed = '1';
       $obj->save();*/

    //    Flight::factory()
    //         ->count(5)            
    //         ->create();

            // $flight = Destination::factory()
            // ->hasMany(Flight::factory()->count(3))
            // ->count(5)
            // ->create();

             // Create 10 records of customers
        // factory(Destination::class, 10)->create()->each(function ($destination) {           
        //     // Seed the relation with 5 purchases
        //     $flights = factory(Flight::class, 5)->make();
        //     $destination->flights()->saveMany($flights);
        // });


        $destionation = Destination::factory()
            ->has(Flight::factory()->count(3), 'flights')
            ->count(2)
            ->create();
    }
}
