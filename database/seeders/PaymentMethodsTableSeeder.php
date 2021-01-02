<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;
use App\Models\User;

class PaymentMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $firstUser = User::first();

        $methods = [
            ['Bkash', 'BDT', 1, 100],
            ['Rocket', 'BDT', 1, 100],
            ['Nagad', 'BDT', 1, 100],
            ['Skrill', 'USD', 80, 100],
            ['Webmoney', 'USD', 80, 100],
            ['Perfect Money', 'USD', 80, 100]
        ];

        foreach($methods as $method){
            PaymentMethod::create([
                'name' => $method[0],
                'currency' => $method[1],
                'buy_rate' => $method[2],
                'sell_rate' => $method[3],
                'created_by' => $firstUser->id,
                'updated_by' => $firstUser->id
            ]);
        }
    }
}
