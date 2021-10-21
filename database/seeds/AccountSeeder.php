<?php

use Illuminate\Database\Seeder;
use Illuminate\Notifications\Notifiable;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            [
                'user_id' => 1,
                'acct_name' => 'Franklin',
                'init_invest' => 14300,
                'start_date' => '2025-12-11',
                'remarks' => 'Innovation and creativity'
            ],
            [
                'user_id' => 2,
                'acct_name' => 'Pableo',
                'init_invest' => 410000,
                'start_date' => '2024-12-12',
                'remarks' => 'Innovation and creativity'
            ],
            [
                'user_id' => 3,
                'acct_name' => 'Mico',
                'init_invest' => 450000,
                'start_date' => '2023-12-12',
                'remarks' => 'Innovation and creativity'
            ]
        ];
        foreach($data as $acc){
            \App\Account::create($acc);
        }
    }
}
