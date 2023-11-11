<?php

namespace Database\Seeders;

use App\Models\NetIncome;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NetIncomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NetIncome::updateOrcreate([
            'particular'    => 'Total',
            'debit'         => 0,
            'credit'        => 0,
            'net'           => 0
        ]);
    }
}
