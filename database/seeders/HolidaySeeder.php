<?php

namespace Database\Seeders;

use App\Models\Holiday;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HolidaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Holiday::updateOrCreate([
            'name'   => 'শুক্রবার'
        ]);
        Holiday::updateOrCreate([
            'name'   => 'শনিবার'
        ]);
        Holiday::updateOrCreate([
            'name'   => 'মঙ্গলবার ও শুক্রবার'
        ]);
        Holiday::updateOrCreate([
            'name'   => 'শুক্রবার ও শনিবার'
        ]);
        Holiday::updateOrCreate([
            'name'   => 'রবিবার ও সোমবার'
        ]);
        Holiday::updateOrCreate([
            'name'   => 'শনিবার ও বুধবার'
        ]);
        Holiday::updateOrCreate([
            'name'   => 'রবিবার ও বৃহস্পতিবার'
        ]);
    }
}
