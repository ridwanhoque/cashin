<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    public function __construct(){
        
    }

    public static function boot(){
        parent::boot();

        if(!app()->runningInConsole){
            static::creating(function($model){
                $model->fill([
                    'created_by' => auth()->user()->id,
                    'updated_by' => auth()->user()->id
                ]);
            });
    
            static::updating(function($model){
                $model->fill([
                    'updated_by' => auth()->user()->id
                ]);
            });
             
        }
        
    }
        
    


}
