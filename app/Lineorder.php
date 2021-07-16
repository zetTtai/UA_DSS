<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;
use App\Product;

class Lineorder extends Model
{
    public function product(){
        return $this->belongsTo('App\Product');
    }

    public function order(){
        return $this->belongsTo('App\Order');
    }
    protected $fillable = [
        'amount', 'order_id', 'product_id'
    ];
}
