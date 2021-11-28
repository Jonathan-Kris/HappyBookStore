<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween($min = 1, $max=2),
            'title' => $this->faker->unique()->randomElement([
                'Harry Potter and Prisoners of Azkaban',
                'Goblin Slayer',
                'Overgeared',
                'Tales of the Demon and God',
                'Solo Leveling',
                'Atomic Habits',
                'Second Coming of Gluttony',
                'Nazi Megastructure',
                'Laskar Pelangi',
                'Bumi Manusia',
                'The Subtle Art of Not Giving a Shit'
            ])
        ];
    }
}
