<?php

namespace Database\Seeders;

use App\Models\FollowUp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FollowUpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FollowUp::updateOrCreate([
            'name'    => 'বিকাল ৬টা থেকে রাত ১০টা'
        ]);

        FollowUp::updateOrCreate([
            'name'    => 'বিকাল ৩টা থেকে রাত ৭টা'
        ]);

        FollowUp::updateOrCreate([
            'name'    => 'সকাল ১০টা থেকে দুপুর ২টা'
        ]);

        FollowUp::updateOrCreate([
            'name'    => 'দুপুর ২টা থেকে সন্ধ্যা ৬টা'
        ]);

        FollowUp::updateOrCreate([
            'name'    => 'রাত ৮টা থেকে রাত ১২টা'
        ]);
    }
}
