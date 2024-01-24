<?php

namespace Database\Factories;

use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ListBook>
 */
class ListBookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = FakerFactory::create();
        return [
            'authorName' => $faker->userName(),
            'bookName' => $faker->citySuffix(),
            'categoryName' => $faker->lastName(),
            'averageRating' => mt_rand(0,10) . "." . mt_rand(00,99),
            'voter' => mt_rand(1,99999),
        ];
    }
}
