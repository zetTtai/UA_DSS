<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'type', 'race', 'age', 'description', 'medical_history', 'user_id'
    ];


    public function appointments(){
        return $this->hasMany('App\Appointment');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

}