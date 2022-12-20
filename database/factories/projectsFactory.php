<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class projectsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'title' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'excerpt'  => $this->faker->paragraph(),
            'body' => $this->faker->paragraph(mt_rand(2,5)),
            'user_id' => mt_rand(1,3),
            'major_id' => mt_rand(1,3)
            //
        ];
    }
}
