<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'brand', 'type', 'description', 'price', 'stock', 'quantity'
    ];

    public function lineorders(){
        return $this->hasMany('App\Lineorder');
    }
}
