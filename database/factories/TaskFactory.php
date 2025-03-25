<?php

namespace Database\Factories;

use App\Models\CurriculumUnit;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->title(),
            'description' => fake()->text(),
            'completed' => fake()->boolean(),
            'value' => fake()->numberBetween(1, 100),
            'student_id' => Student::query()->inRandomOrder()->first()->id,
            'curriculum_unit_id' => CurriculumUnit::query()->inRandomOrder()->first()->id,
        ];
    }
}
