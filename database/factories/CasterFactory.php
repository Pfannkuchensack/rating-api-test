<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\caster>
 */
class CasterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->userName;
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'twitter' => $name,
            'twitch' => $name,
            'youtube' => $name,
            'instagram' => $name,
            'discord' => $name,
            'slug' => $this->faker->slug(),
        ];
    }
}
