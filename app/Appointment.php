<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Pet;

class Appointment extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function pet(){
        return $this->belongsTo('App\Pet');
    }

    protected $fillable = [
        'appointment', 'price', 'description', 'user_id', 'pet_id', 'idCuidador'
    ];    
}
