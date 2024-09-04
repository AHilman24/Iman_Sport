<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Merek>
 */
class MerekFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'merek'=> $this->faker->unique()->company,
            'slug' => $this->faker->unique()->slug,
            'foto' => 'https://picsum.photos/id/' . rand(1, 1000) . '/200/300',
        ];
    }
}
