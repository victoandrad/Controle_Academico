<?php

namespace Database\Seeders;

use App\Models\StudentGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StudentGroup::factory(1)->create([
            'name' => 'E1-2024 BC ENSW'
        ]);
    }
}
