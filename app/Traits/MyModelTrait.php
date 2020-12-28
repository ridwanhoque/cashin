<?php

namespace App\Traits;

trait MyModelTrait{

    public static function bootMyModelTrait(){
            if(! app()->runningInConsole()){
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