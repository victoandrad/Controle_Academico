<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DatabaseSeeder::call([
            UserSeeder::class,
            CurriculumUnitSeeder::class,
            RoomSeeder::class,
            StudentGroupSeeder::class,
            StudentSeeder::class,
            TeacherSeeder::class,
            TimeslotSeeder::class,
            LessonSeeder::class,
            TaskSeeder::class,
        ]);
    }
}
