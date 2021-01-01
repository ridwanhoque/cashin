<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    use HasFactory;

    public function payment_method_from(){
        return $this->belongsTo(\App\Models\PaymentMethod::class, 'from_method', 'id');
    }

    public function payment_method_to(){
        return $this->belongsTo(\App\Models\PaymentMethod::class, 'to_method', 'id');
    }

    public function status(){
        return $this->belongsTo(\App\Models\Status::class, 'status_id', 'id');
    }


}
