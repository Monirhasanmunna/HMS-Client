<?php

namespace Database\Seeders;

use App\Models\Frequency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FrequencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Frequency::updateOrCreate([
            'name' => 'সকালে + দুপুরে + রাতে'
        ]);
        Frequency::updateOrCreate([
            'name' => 'সকালে + দুপুরে'
        ]);
        Frequency::updateOrCreate([
            'name' => 'সকালে + রাতে'
        ]);
        Frequency::updateOrCreate([
            'name' => 'দুপু্রে + রাতে'
        ]);
        Frequency::updateOrCreate([
            'name' => 'সকালে'
        ]);
        Frequency::updateOrCreate([
            'name' => 'দুপু্রে'
        ]);
        Frequency::updateOrCreate([
            'name' => 'রাতে'
        ]);
        Frequency::updateOrCreate([
            'name' => '৬ ঘণ্টা পর পর'
        ]);
        Frequency::updateOrCreate([
            'name' => '১ দিন পরপর'
        ]);
        Frequency::updateOrCreate([
            'name' => 'প্রতি শুক্রবার'
        ]);
        Frequency::updateOrCreate([
            'name' => 'প্রতি শনিবার'
        ]);
        Frequency::updateOrCreate([
            'name' => 'প্রতি রবিবার'
        ]);
        Frequency::updateOrCreate([
            'name' => 'প্রতি সোমবার'
        ]);
        Frequency::updateOrCreate([
            'name' => '৫০০ মি. লি. পানিতে মিশিয়ে'
        ]);
        Frequency::updateOrCreate([
            'name' => 'প্রতি শনি ও বুধবার'
        ]);
        Frequency::updateOrCreate([
            'name' => 'প্রতি মঙ্গল ও বুধবার'
        ]);
        Frequency::updateOrCreate([
            'name' => 'মঙ্গল ও বুধবার বাদে প্রতিদিন'
        ]);
        Frequency::updateOrCreate([
            'name' => 'মলদ্বারে'
        ]);
        Frequency::updateOrCreate([
            'name' => 'শুক্রবার বাদে প্রতিদিন'
        ]);
    }
}
