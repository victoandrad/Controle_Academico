<?php

namespace Database\Factories;

use App\Models\StudentGroup;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'registration_number' => fake()->unique()->numerify('###########'),
            'student_group_id' => StudentGroup::query()->inRandomOrder()->first()->id,
            'user_id' => null,
        ];
    }

    public function withUser(array $userData = []): static
    {
        return $this->state(function (array $attributes) use ($userData) {
            $user = User::factory()->create($userData);
            return ['user_id' => $user->id];
        });
    }

}
