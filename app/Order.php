<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }
    public function lineorders(){
        return $this->hasMany('App\Lineorder');
    }

    protected $fillable = [
        'date', 'totalprice', 'status', 'user_id'
    ];
}
