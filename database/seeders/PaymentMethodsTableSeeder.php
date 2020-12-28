<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;

class PaymentMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $methods = [
            ['Bkash', 'bdt', 1],
            ['Rocket', 'bdt', 1],
            ['Nagad', 'bdt', 1],
            ['Skrill', 'usd', 80],
            ['Webmoney', 'usd', 80],
            ['Perfect Money', 'usd', 80]
        ];

        foreach($methods as $method){
            PaymentMethod::create([
                'name' => $method[0],
                'currency' => $method[1],
                'rate' => $method[2]
            ]);
        }
    }
}
