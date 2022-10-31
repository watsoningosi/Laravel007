<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence, //Generates a fake sentence
            'exerpt' => $this->faker->paragraph(30), //generates fake 30 paragraphs
            'body' => $this->faker->paragraph(80), //generates fake 30 paragraphs
            'user_id' => User::factory()
        ];
    }
}
