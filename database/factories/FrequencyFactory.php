<?php

namespace Database\Factories;

use App\Models\CurriculumUnit;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Frequency>
 */
class FrequencyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'value' => fake()->numberBetween(0, 1),
            'student_id' => Student::query()->inRandomOrder()->first()->id,
            'curriculum_unit_id' => CurriculumUnit::query()->inRandomOrder()->first()->id,
        ];
    }
}
