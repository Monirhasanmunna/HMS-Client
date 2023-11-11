<?php

namespace Database\Seeders;

use App\Models\Bed;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bed::updateOrCreate([
            'bedgroup_id'   => 1,
            'bedtype_id'    => 1,
            'name'          => 'GF - 101',
        ]);

        Bed::updateOrCreate([
            'bedgroup_id'   => 2,
            'bedtype_id'    => 2,
            'name'          => 'SF - 105',
        ]);

        Bed::updateOrCreate([
            'bedgroup_id'   => 3,
            'bedtype_id'    => 3,
            'name'          => 'TF - 102',
        ]);
    }
}
