<?php

namespace Database\Factories;

use App\Models\Daftar;
use App\Models\Rayon;
use App\Models\MasterStudent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MasterStudent>
 */
class MasterStudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'nis' => fake()->numberBetween(120000,130000),
            'rombel' => fake()->company(),
            'rayon' => fake()->randomElement(Rayon::all())['name'], 
            'eskul' => fake()->randomElement(Daftar::all())['title'],
            
        ];
    }
}
