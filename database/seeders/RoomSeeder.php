<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Room::factory(1)->create([
            'name' => 'Lab 1',
            'size' => 20,
        ]);

        Room::factory(1)->create([
            'name' => 'Lab 2',
            'size' => 39,
        ]);

        Room::factory(1)->create([
            'name' => 'Lab 3',
            'size' => 50,
        ]);

        Room::factory(1)->create([
            'name' => 'Lab 4',
            'size' => 39,
        ]);

        Room::factory(1)->create([
            'name' => 'Lab 5',
            'size' => 68,
        ]);

        Room::factory(1)->create([
            'name' => 'Lab 6',
            'size' => 72,
        ]);

        Room::factory(1)->create([
            'name' => 'Lab 7',
            'size' => 68,
        ]);

        Room::factory(1)->create([
            'name' => 'Lab 8',
            'size' => 72,
        ]);

        Room::factory(1)->create([
            'name' => 'Sala 1026',
            'size' => 40,
        ]);

        Room::factory(1)->create([
            'name' => 'Sala 1027',
            'size' => 66,
        ]);

        Room::factory(1)->create([
            'name' => 'Sala 1028',
            'size' => 30,
        ]);

        Room::factory(1)->create([
            'name' => 'Sala 1029',
            'size' => 30,
        ]);

        Room::factory(1)->create([
            'name' => 'Sala 1030',
            'size' => 40,
        ]);

        Room::factory(1)->create([
            'name' => 'Sala 1031',
            'size' => 40,
        ]);

        Room::factory(1)->create([
            'name' => 'Sala 1032',
            'size' => 65,
        ]);

        Room::factory(1)->create([
            'name' => 'Sala 1033',
            'size' => 30,
        ]);

        Room::factory(1)->create([
            'name' => 'Sala 1034',
            'size' => 60,
        ]);

        Room::factory(1)->create([
            'name' => 'Sala 1035',
            'size' => 60,
        ]);

        Room::factory(1)->create([
            'name' => 'Sala 1036',
            'size' => 40,
        ]);

        Room::factory(1)->create([
            'name' => 'Sala 1037',
            'size' => 40,
        ]);

        Room::factory(1)->create([
            'name' => 'Sala 1038',
            'size' => 60,
        ]);
    }
}
