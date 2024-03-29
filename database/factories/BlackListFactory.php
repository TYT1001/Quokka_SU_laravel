<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlackList>
 */
class BlackListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'occupation' => $this->faker->jobTitle(),
            'year' => $this->faker->emoji(),
            'uni_id' => $this->faker->randomDigitNotNull(), // password
        ];
    }
}
