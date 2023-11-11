<?php

namespace Database\Seeders;

use App\Models\ExpenseCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpenseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExpenseCategory::updateOrCreate([
            'name'  => 'Utility',
        ]);

        ExpenseCategory::updateOrCreate([
            'name'  => 'Salary',
        ]);
    }
}
