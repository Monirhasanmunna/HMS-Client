<?php

namespace Database\Seeders;

use App\Models\Assistant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssistantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Assistant::updateOrCreate([
            'doctor_id' => 1,
            'name'      => 'Sharif',
            'email'     => 'sharif@gmail.com',
            'degrees'   => 'Anatomy and physiology',
            'mobile'    => 1457842147
        ]);

        Assistant::updateOrCreate([
            'doctor_id' => 2,
            'name'      => 'Arif',
            'email'     => 'arif@gmail.com',
            'degrees'   => 'Pharmacology ',
            'mobile'    => 1457842147
        ]);
    }
}
