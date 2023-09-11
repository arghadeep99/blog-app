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
        $categoryArray = ['Food','Travel','Lifestyle','Photography','Health and fitness','Fashion and beauty'];
        return [
            'title' => rtrim($this->faker->sentence(rand(5, 6)), "."),
            'body' => $this->faker->paragraphs(rand(10, 20), true),
            'category' => $categoryArray[rand(0, 5)],
        ];
    }
}
