<?php

namespace Database\Seeders;

use App\Models\Stockbroker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StockbrokerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stockbrokers = [
            [
                'name' => 'NuInvest',
                'full_name' => 'NuInvest Corretora de Valores S.A',
                'cnpj' => '62169875000179',
            ],
            [
                'name' => 'Warren',
                'full_name' => 'Warren CVMC Ltda',
                'cnpj' => '92875780000131',
            ],
            [
                'name' => 'XP',
                'full_name' => 'XP Investimentos CCTVM S/A',
                'cnpj' => '02332886000104',
            ]
        ];

        foreach ($stockbrokers as $stockbroker) {
            Stockbroker::firstOrcreate($stockbroker);
        }
    }
}
