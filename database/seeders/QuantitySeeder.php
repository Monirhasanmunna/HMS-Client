<?php

namespace Database\Seeders;

use App\Models\Quantity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuantitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quantity::updateOrCreate([
            'name'  => '১/২'
        ]);
        Quantity::updateOrCreate([
            'name'  => '৩/৪'
        ]);
        Quantity::updateOrCreate([
            'name'  => '১'
        ]);
        Quantity::updateOrCreate([
            'name'  => '২'
        ]);
        Quantity::updateOrCreate([
            'name'  => '২.১/২'
        ]);
        Quantity::updateOrCreate([
            'name'  => '৩'
        ]);
        Quantity::updateOrCreate([
            'name'  => '৩-৪'
        ]);
        Quantity::updateOrCreate([
            'name'  => '৮-১০'
        ]);
        Quantity::updateOrCreate([
            'name'  => '১২+০+১০'
        ]);
        Quantity::updateOrCreate([
            'name'  => '১.১/২'
        ]);
        Quantity::updateOrCreate([
            'name'  => '১০+০+৮'
        ]);
        Quantity::updateOrCreate([
            'name'  => '১২+০+৮'
        ]);
        Quantity::updateOrCreate([
            'name'  => '১৫'
        ]);
        Quantity::updateOrCreate([
            'name'  => '৮'
        ]);
        Quantity::updateOrCreate([
            'name'  => '১০'
        ]);
        Quantity::updateOrCreate([
            'name'  => '২৬'
        ]);
        Quantity::updateOrCreate([
            'name'  => '১৪+০+২৪'
        ]);
        Quantity::updateOrCreate([
            'name'  => '১+২+৩'
        ]);
    }
}
