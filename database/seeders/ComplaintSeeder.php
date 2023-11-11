<?php

namespace Database\Seeders;

use App\Models\Complaint;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComplaintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Complaint::updateOrCreate([
            'name'  => 'প্রচন্ড জ্বর'
        ]);
        Complaint::updateOrCreate([
            'name'  => 'ঘারে ব্যাথা'
        ]);
        Complaint::updateOrCreate([
            'name'  => 'মাথা ঘুরায়'
        ]);
        Complaint::updateOrCreate([
            'name'  => 'বমি বমি ভাব'
        ]);
        Complaint::updateOrCreate([
            'name'  => 'প্রচন্ড চুলকানী'
        ]);
    }
}
