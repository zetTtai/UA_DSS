<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    public function appointments(){
        return $this->hasMany('App\Appointment');
    }
    
    public function pets() {
        return $this->hasMany('App\Pet');
    }

    public function orders() {
        return $this->hasMany('App\Order');
    }

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'dni', 'client', 'phone', 'account', 'adress', 'salary', 'ocuppation'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeName($query, $name)
    {
        if($name){
            return $query->where('name','like',"%$name%");
        }
            
    }

    public function scopeAge($query, $dni)
    {
        if($dni){
            return $query->where('dni','like',"%$dni%");
        }
            
    }
}
