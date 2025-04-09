<?php

namespace Database\Factories;

use App\Models\CurriculumUnit;
use App\Models\Lesson;
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
            'lesson_id' => Lesson::query()->inRandomOrder()->first()->id,
        ];
    }
}
