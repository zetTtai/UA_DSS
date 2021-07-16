<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Pet;



class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c = new User(); // Veterinario
        $c->name = 'Julian';
        $c->client= 1;
        $c->dni = '54576312X';
        $c->email = 'juli@gmail.com';
        $c->password =  Hash::make('12345678');
        $c->phone = '574829111';

        $c->account= '123';
        $c->adress= 'Calle';

        $c->salary= '0';
        $c->ocuppation= 'null';
        $c->save();

        $p= new Pet();
        $p->name= 'Zarpitas';
        $p->type= 'Perro';
        $p->race= 'Pastor aleman';
        $p->age= '8';
        $p->description= 'Esta malito';
        $p->medical_history= 'equis vacunas';

        $p->user()->associate($c); // Deberia ser cliente
        $c->pets()->save($p);

        $c1 = new User(); // Cliente
        $c1->name = 'Manolo';
        $c1->client= true;
        $c1->dni = '12345678X';
        $c1->email = 'Manolo@gmail.com';
        $c1->password = Hash::make('Manolo123123');
        $c1->phone = '123456789';

        $c1->account= '1';
        $c1->adress= 'Calle olivas 14';

        $c1->salary= '0';
        $c1->ocuppation= 'null';
        $c1->save();

        $p1= new Pet();
        $p1->name= 'OscarElPerro';
        $p1->type= 'Perro';
        $p1->race= 'Pug';
        $p1->age= '4';
        $p1->description= 'Limpieza';
        $p1->medical_history= 'equis vacunas';

        $p1->user()->associate($c1); // Deberia ser cliente
        $c1->pets()->save($p1);


    }
}
