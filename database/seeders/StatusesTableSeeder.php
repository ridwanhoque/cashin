<?php

namespace Database\Seeders;

use App\Models\Status;
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
                    'name' => $status
                ]);        
        }
    }
}
