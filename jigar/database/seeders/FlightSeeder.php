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
        //
        // Flight::factory()
        //     ->count(5)
        //     ->create();

        $destionation = Destination::factory()
            ->has(Flight::factory()->count(3), 'flights')
            ->count(2)
            ->create();

        // php artisan db:seed 
        // php artisan db:seed --class=UserSeeder

        // ompletely re-building your database:
        // , which will drop all tables and re-run all of your migrations. This command is useful for completely re-building your database:

        // php artisan migrate:fresh --seed

        // php artisan db:seed --force


    }
}
