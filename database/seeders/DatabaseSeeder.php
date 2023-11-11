<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(FollowUpSeeder::class);
        $this->call(HolidaySeeder::class);
        $this->call(DoctorSeeder::class);
        $this->call(AssistantSeeder::class);
        $this->call(DiseaseSeeder::class);
        $this->call(BloodSeeder::class);
        $this->call(FrequencySeeder::class);
        $this->call(QuantitySeeder::class);
        $this->call(QuantityTypeSeeder::class);
        $this->call(EatingTimeSeeder::class);
        $this->call(AdviceSeeder::class);
        $this->call(MedicineGroupSeeder::class);
        $this->call(MedicineSeeder::class);
        $this->call(FloorSeeder::class);
        $this->call(BedGroupSeeder::class);
        $this->call(BedTypeSeeder::class);
        $this->call(BedSeeder::class);
        $this->call(ComplaintSeeder::class);
        $this->call(MedicalTestSeeder::class);
        $this->call(PatientSeeder::class);   
        $this->call(SetupSeeder::class);
        $this->call(ExpenseCategorySeeder::class);
        $this->call(ExpenseSeeder::class);
        $this->call(NetIncomeSeeder::class);
    }
}
