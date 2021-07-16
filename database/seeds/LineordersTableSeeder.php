<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Lineorder;
use App\Order;
use App\User;

class LineordersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c = new User(); // Cliente
        $c->name = 'Juan José';
        $c->client= true;
        $c->dni = '12345678X';
        $c->email = 'jj@gmail.com';
        $c->password = Hash::make('Manolo123123');
        $c->phone = '123456789';

        $c->account= '1';
        $c->adress= 'Calle olivas 10';

        $c->salary= '0';
        $c->ocuppation= 'null';
        $c->save();

        $o = new Order();
        $o->date= '2021-04-08';
        $o->totalprice= '5000';
        $o->status= 'Enviando';

        $o->user()->associate($c);
        $c->orders()->save($o);

        $p= new Product();
        $p->name= 'Collar táctico';
        $p->brand= 'Nike';
        $p->type= 'Paseo';
        $p->description= 'Encima táctico';
        $p->price= '50';
        $p->stock= '5';
        $p->quantity= '1';
        $p->save();

        $p= new Product();
        $p->name= 'Comida para perros';
        $p->brand= 'Royal Canin';
        $p->type= 'Comida';
        $p->description= 'Nutritivo';
        $p->price= '67';
        $p->stock= '3';
        $p->quantity= '1';
        $p->save();

        $l= new Lineorder();
        $l->amount= '5';

        $l->order()->associate($o);
        $l->product()->associate($p);
        $o->lineorders()->save($l);
        $p->lineorders()->save($l);
    }
}
