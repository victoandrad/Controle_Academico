<?php

namespace Database\Seeders;

use App\Models\Timeslot;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimeslotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Timeslot::factory(1)->create([
            'day_of_week' => 'Monday',
            'start_time' => '19:00:00',
            'end_time' => '20:30:00'
        ]);

        Timeslot::factory(1)->create([
            'day_of_week' => 'Monday',
            'start_time' => '20:45:00',
            'end_time' => '22:15:00'
        ]);

        Timeslot::factory(1)->create([
            'day_of_week' => 'Tuesday',
            'start_time' => '19:00:00',
            'end_time' => '20:30:00'
        ]);

        Timeslot::factory(1)->create([
            'day_of_week' => 'Tuesday',
            'start_time' => '20:45:00',
            'end_time' => '22:15:00'
        ]);

        Timeslot::factory(1)->create([
            'day_of_week' => 'Wednesday',
            'start_time' => '19:00:00',
            'end_time' => '20:30:00'
        ]);

        Timeslot::factory(1)->create([
            'day_of_week' => 'Wednesday',
            'start_time' => '20:45:00',
            'end_time' => '22:15:00'
        ]);

        Timeslot::factory(1)->create([
            'day_of_week' => 'Thursday',
            'start_time' => '19:00:00',
            'end_time' => '20:30:00'
        ]);

        Timeslot::factory(1)->create([
            'day_of_week' => 'Thursday',
            'start_time' => '20:45:00',
            'end_time' => '22:15:00'
        ]);

        Timeslot::factory(1)->create([
            'day_of_week' => 'Friday',
            'start_time' => '19:00:00',
            'end_time' => '20:30:00'
        ]);

        Timeslot::factory(1)->create([
            'day_of_week' => 'Friday',
            'start_time' => '20:45:00',
            'end_time' => '22:15:00'
        ]);

    }
}
