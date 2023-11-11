<?php

namespace Database\Seeders;

use App\Models\Blood;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BloodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blood::updateOrCreate([
            'name'  => 'A+'
        ]);

        Blood::updateOrCreate([
            'name'  => 'A-'
        ]);

        Blood::updateOrCreate([
            'name'  => 'B+'
        ]);

        Blood::updateOrCreate([
            'name'  => 'B-'
        ]);

        Blood::updateOrCreate([
            'name'  => 'O+'
        ]);

        Blood::updateOrCreate([
            'name'  => 'O-'
        ]);
    }
    
}
