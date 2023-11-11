<?php

namespace Database\Seeders;

use App\Models\Setup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setup::updateOrCreate([
            'company_name'  => 'QB Hospital Manegement System',
            'email'         => 'qb@gmail.com',
            'phone'         => '01754781245',
            'address'       => 'Chittagong',
            'copyright_text'=> 'Copyright @ QB',
            'logo'          => 'logo.png'
        ]);
    }
}
