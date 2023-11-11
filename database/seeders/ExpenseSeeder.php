<?php

namespace Database\Seeders;

use App\Models\Expense;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Expense::updateOrCreate([
            'expense_category_id'   => 1,
            'name'                  => 'Electricity Bill',
            'amount'                => 0
        ]);
    }
}
