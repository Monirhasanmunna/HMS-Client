<?php

namespace Database\Seeders;

use App\Models\Disease;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Disease::updateOrCreate([
            'name'  => 'Amenorrhea',
            'code'  => 1000
        ]);

        Disease::updateOrCreate([
            'name'  => 'Excessive per vaginal bleeding',
            'code'  => 1001
        ]);

        Disease::updateOrCreate([
            'name'  => 'For IUI',
            'code'  => 1002
        ]);
    
    }
}
