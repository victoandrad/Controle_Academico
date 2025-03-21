<?php

namespace Database\Seeders;

use App\Models\User;
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
            TeacherSeeder::class,
            RoomSeeder::class,
            StudentGroupSeeder::class,
            StudentSeeder::class,
            TimeslotSeeder::class,
        ]);
    }
}
