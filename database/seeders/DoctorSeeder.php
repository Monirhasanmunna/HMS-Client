<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Doctor::updateOrCreate([
            'name'                  => 'Dr.Sharmin Akter',
            'email'                 => 'sharmin@gmail.com',
            'degrees'               => 'MBBS,MPCS,DGO,FCPS',
            'specialist'            => 'GYNAE & OBS',
            'designation'           => 'Consultant',
            'consultant_of_college' => 'USTC Medical College & Hospital',
            'mobile'                => '01754874782',
            'firstVisit'            => 1000,
            'nextVisit'             => 800,
            'reportOnly'            => 600,

            'b_name'                    => 'ডাঃ শারমিন আক্তার',
            'b_degrees'                 => 'এমবিবিএস,এমপিসিএস,ডিজিও,এফসিপিএস',
            'b_specialist'              => 'গাইনি এন্ড অবস',
            'b_designation'             => 'কন্সাল্টেন্ট',
            'b_consultant_of_college'   => 'ইউটিএস মেডিকেল কলেজ এন্ড হাসপাতাল',
            'room_id'                   => 1,
            'followup_id'               => 1,
            'holiday_id'                => 1,
        ]);

        Doctor::updateOrCreate([
            'name'                  => 'Dr.Shirin Fatema',
            'email'                 => 'shirin@gmail.com',
            'degrees'               => 'MBBS,MPCS,DGO,FCPS',
            'specialist'            => 'GYNAE & OBS',
            'consultant_of_college' => 'USTC Medical College & Hospital',
            'designation'           => 'Professor',
            'mobile'                => '01754874782',
            'firstVisit'            => 800,
            'nextVisit'             => 600,
            'reportOnly'            => 400,

            'b_name'                    => 'ডাঃ শিরিন ফাতেমা',
            'b_degrees'                 => 'এমবিবিএস,এমপিসিএস,ডিজিও,এফসিপিএস',
            'b_specialist'              => 'গাইনি এন্ড অবস',
            'b_designation'             => 'কন্সাল্টেন্ট',
            'b_consultant_of_college'   => 'ইউটিএস মেডিকেল কলেজ এন্ড হাসপাতাল',
            'room_id'                   => 2,
            'followup_id'               => 2,
            'holiday_id'                => 2
        ]);
    }
}
