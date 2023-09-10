<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Faker\Generator as Faker;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'title' => rtrim($this->faker->sentence(rand(5, 10)), "."),
            'body' => $this->faker->paragraphs(rand(3, 7), true),
        ];
    }
}
