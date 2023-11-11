<?php

namespace Database\Seeders;

use App\Models\QuantityType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuantityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuantityType::updateOrCreate([
            'name'  => 'ইউনিট'
        ]);

        QuantityType::updateOrCreate([
            'name'  => 'বার'
        ]);

        QuantityType::updateOrCreate([
            'name'  => 'প্যাকেট'
        ]);
        
        QuantityType::updateOrCreate([
            'name'  => 'ফোঁটা'
        ]);

        QuantityType::updateOrCreate([
            'name'  => 'মি. লি.'
        ]);

        QuantityType::updateOrCreate([
            'name'  => 'চাপ'
        ]);
    }
}
