<?php

namespace Database\Factories;

use App\Models\CurriculumUnit;
use App\Models\Room;
use App\Models\StudentGroup;
use App\Models\Teacher;
use App\Models\Timeslot;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "room_id" => Room::query()->inRandomOrder()->first(),
            "timeslot_id" => Timeslot::query()->inRandomOrder()->first(),
            "teacher_id" => Teacher::query()->inRandomOrder()->first(),
            "student_group_id" => StudentGroup::query()->inRandomOrder()->first(),
            "curriculum_unit_id" => CurriculumUnit::query()->inRandomOrder()->first(),
        ];
    }
}
