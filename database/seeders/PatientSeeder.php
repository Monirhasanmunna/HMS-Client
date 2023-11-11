<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Patient::updateOrCreate([
            'name'  => 'dummy one',
            'doctor_id'=>1,
            'blood_group'=>'A+',
            'age'=>47,
            'sex'=>'Male',
            'address'=>'abc road, abc area, abc',
            'mobile'=>'0133555412',            
        ]);
        Patient::updateOrCreate([
            'name'  => 'dummy two',
            'doctor_id'=>1,
            'blood_group'=>'O-',
            'age'=>47,
            'sex'=>'Female',
            'address'=>'abc road, abc area, abc',
            'mobile'=>'0133555412',            
        ]);
        Patient::updateOrCreate([
            'name'  => 'dummy three',
            'doctor_id'=>1,
            'blood_group'=>'O-',
            'age'=>47,
            'sex'=>'Female',
            'address'=>'abc road, abc area, abc',
            'mobile'=>'0133555412',            
        ]);

        }
}
