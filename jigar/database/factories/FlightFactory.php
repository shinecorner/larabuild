<?php

namespace Database\Factories;

use App\Models\Flight;
use Illuminate\Database\Eloquent\Factories\Factory;

class FlightFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Flight::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->city,
            'number' => $this->faker->numberBetween(10000, 99999),
            'departure' => $this->faker->city,
            'destination' => $this->faker->city,
            'price' => $this->faker->numberBetween(1000, 5000),
            'active' => intval($this->faker->boolean),
            'departed' => intval($this->faker->boolean),
            'arrived_at' => $this->faker->dateTime()
        ];
    }
}
