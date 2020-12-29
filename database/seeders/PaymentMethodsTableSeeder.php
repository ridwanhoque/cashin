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
            ['Bkash', 'bdt', 1, 100],
            ['Rocket', 'bdt', 1, 100],
            ['Nagad', 'bdt', 1, 100],
            ['Skrill', 'usd', 80, 100],
            ['Webmoney', 'usd', 80, 100],
            ['Perfect Money', 'usd', 80, 100]
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
