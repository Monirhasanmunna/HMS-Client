<?php

namespace Database\Seeders;

use App\Models\MedicalTest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicalTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MedicalTest::updateOrCreate([
            'name'=>'ASO Titre'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'Barium Swallow X-Ray'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'Bilirubin'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'Blood Glucose, 2h After 75g Glucose Intake'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'Blood Glucose, 2h After Breakfast'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'Blood Glucose, Fasting'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'Blood Glucose, Random'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'Blood Grouping'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'CA-125'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'CBC'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'Cholesterol Total'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'Coronary Angiogram'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'Creatinine'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'CRP'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'CT-Scan of Brain'
        ]);
        
        MedicalTest::updateOrCreate([
            'name'=>'ECG'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'Echocardiography (2D)'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'Echocardiography (Doppler)'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'Electrolytes'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'ESR'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'Free T3'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'Free T4'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'HbA1C'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'HBsAg'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'Hemoglobin'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'Infrared Therapy'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'Lipid Profile'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'MRI of L/S Spine (Plain)'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'Nebulization'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'Pregnancy Test'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'PSA'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'RA/RF'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'RT-PCR for COVID-19'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'Serum Amylase'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'Serum Ig E'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'Serum Lipase'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'SGOT'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'SGPT/ALT'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'Sputum for AFB'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'TC/DC'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'TG'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'Troponin-I'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'TSH'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'Uric Acid'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'Urine R/E'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'USG of KUB region'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'USG of KUB region &amp; Prostate'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'USG of Pregnancy Profile'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'USG of Whole Abdomen'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'VDRL'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'Widal Test'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'X-Ray Abdomen erect posture A/P view'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'X-Ray Cervical Spine both view'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'X-ray Chest A/P view'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'X-Ray Chest P/A view'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'X-Ray Foot both view (Right/Left)'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'X-Ray Knee both view'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'X-Ray L/S spine both view'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'X-Ray Leg both view'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'X-ray of wrist joint of left side'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'X-Ray Pelvis A/P view'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'X-Ray PNS O/M view'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'X-Ray right ankle joint both view'
        ]);
        MedicalTest::updateOrCreate([
            'name'=>'X-Ray right wrist joint both view'
        ]);

    }
    
}
