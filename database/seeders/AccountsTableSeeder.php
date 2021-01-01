<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Seeder;
use App\Models\User;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $firstUser = User::first();

        $accounts = [
            [1, 'ridwanhoque2@gmail.com', '01674204306', 0],
            [2, 'ridwanhoque2@gmail.com', '016742043065', 0],
            [3, 'ridwanhoque2@gmail.com', '01674204306', 0],
            [4, 'ridwan.abdnews@gmail.com', '01674204306', 0],
            [5, 'ridwan.abdnews@gmail.com', '01674204306', 0]
        ];

        foreach($accounts as $account){
            Account::create([
                'payment_method_id' => $account[0],
                'email' => $account[1],
                'account_id' => $account[2],
                'description' => '',
                'balance' => $account[3],
                'account_holder' => $firstUser->id,
                'created_by' => $firstUser->id,
                'updated_by' => $firstUser->id
            ]);
        }
    }
}
