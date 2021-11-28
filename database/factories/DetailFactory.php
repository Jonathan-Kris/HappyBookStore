<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "book_id" => $this->faker->unique()->numberBetween(1, 10),
            "author" => $this->faker->name(),
            "publisher" => $this->faker->company(),
            "year" => $this->faker->year(),
            "description" => $this->faker->realText(200, 2)
        ];
    }
}
