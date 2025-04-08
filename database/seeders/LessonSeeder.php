<?php

namespace Database\Seeders;

use App\Models\Lesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lesson::factory(1)->create([
            'room_id' => 15,
            'timeslot_id' => 1,
            'teacher_id' => 20,
            'student_group_id' => 1,
            'curriculum_unit_id' => 1
        ]);

        Lesson::factory(1)->create([
            'room_id' => 15,
            'timeslot_id' => 2,
            'teacher_id' => 27,
            'student_group_id' => 1,
            'curriculum_unit_id' => 2
        ]);

        Lesson::factory(1)->create([
            'room_id' => 10,
            'timeslot_id' => 3,
            'teacher_id' => 4,
            'student_group_id' => 1,
            'curriculum_unit_id' => 3
        ]);

        Lesson::factory(1)->create([
            'room_id' => 10,
            'timeslot_id' => 4,
            'teacher_id' => 7,
            'student_group_id' => 1,
            'curriculum_unit_id' => 4
        ]);

        Lesson::factory(1)->create([
            'room_id' => 15,
            'timeslot_id' => 7,
            'teacher_id' => 20,
            'student_group_id' => 1,
            'curriculum_unit_id' => 1
        ]);

        Lesson::factory(1)->create([
            'room_id' => 15,
            'timeslot_id' => 8,
            'teacher_id' => 7,
            'student_group_id' => 1,
            'curriculum_unit_id' => 4
        ]);
    }
}
