<?php

namespace Database\Seeders;

use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $firstUser = User::first();

        $statuses = [
            'Awaiting Payment',
            'Timeout',
            'Proccessing',
            'Processed',
            'Denied',
            'Cancelled'
        ];

        foreach($statuses as $status){
            Status::create([
                    'name' => $status,
                    'created_by' => $firstUser->id,
                    'updated_by' => $firstUser->id
                ]);        
        }
    }
}
