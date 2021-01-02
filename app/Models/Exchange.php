<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    use HasFactory;

    public function sent_method(){
        return $this->belongsTo(\App\Models\PaymentMethod::class, 'sent_method', 'id');
    }

    public function received_method(){
        return $this->belongsTo(\App\Models\PaymentMethod::class, 'received_method', 'id');
    }

    public function status(){
        return $this->belongsTo(\App\Models\Status::class, 'status_id', 'id');
    }


}
