<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Flight;

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

       Flight::factory()
            ->count(5)            
            ->create();
    }
}
