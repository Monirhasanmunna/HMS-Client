<?php

namespace Database\Seeders;

use App\Models\Medicinegroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicineGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Medicinegroup::updateOrCreate([
            'name'  => 'Cap'
        ]);

        Medicinegroup::updateOrCreate([
            'name'  => 'Tab'
        ]);

        Medicinegroup::updateOrCreate([
            'name'  => 'Syrup'
        ]);

    }
}
