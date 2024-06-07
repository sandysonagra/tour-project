<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TourBrand;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TourBrandData>
 */
class TourBrandDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tour_brand_id' => TourBrand::factory(),
            'tour_name' => $this->faker->name,
            'price' => $this->faker->randomFloat(2, 50, 500),
        ];
    }
}
