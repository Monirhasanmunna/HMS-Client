<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::updateOrCreate([
            'name'   => 101,
        ]);
        Room::updateOrCreate([
            'name'   => 102,
        ]);
        Room::updateOrCreate([
            'name'   => 103,
        ]);
        Room::updateOrCreate([
            'name'   => 104,
        ]);
        Room::updateOrCreate([
            'name'   => 105,
        ]);
        Room::updateOrCreate([
            'name'   => 106,
        ]);
        Room::updateOrCreate([
            'name'   => 107,
        ]);
        Room::updateOrCreate([
            'name'   => 108,
        ]);
        Room::updateOrCreate([
            'name'   => 109,
        ]);
        Room::updateOrCreate([
            'name'   => 110,
        ]);
    }
}
