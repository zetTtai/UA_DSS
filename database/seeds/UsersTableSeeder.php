<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Pet;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $c = new User(); // Cliente
        $c->name = 'Francisco';
        $c->client= true;
        $c->dni = '12345678Y';
        $c->email = 'Francisco@gmail.com';
        $c->password = Hash::make('12345678');
        $c->phone = '123456789';

        $c->account= '1';
        $c->adress= 'Calle olivas 14';

        $c->salary= '0';
        $c->ocuppation= 'null';
        $c->save();


        $a = new User(); // Cliente
        $a->name = 'Administrador';
        $a->client= 2;
        $a->dni = '12345678W';
        $a->email = 'AdminTodoPoderoso@gmail.com';
        $a->password = Hash::make('admin1234');
        $a->phone = '123456789';

        $a->account= '1';
        $a->adress= 'Calle olivas 14';

        $a->salary= '3000';
        $a->ocuppation= 'Administrador';
        $a->save();

        $q = new User(); // Veter
        $q->name = 'Floyd';
        $q->client= 0;
        $q->dni = '12875678W';
        $q->email = 'flo@gmail.com';
        $q->password = Hash::make('12345678');
        $q->phone = '124567432';

        $q->account= '1';
        $q->adress= 'Calle olivas 12';

        $q->salary= '2000';
        $q->ocuppation= 'Asistente';
        $q->save();

        $v = new User(); // Veterinario
        $v->name = 'Felipito';
        $v->client= false;
        $v->dni = '61576312X';
        $v->email = 'felip@gmail.com';
        $v->password = Hash::make('12345678');
        $v->phone = '574319111';

        $v->account= '0';
        $v->adress= 'null';

        $v->salary= '12000';
        $v->ocuppation= 'Cirujano';
        $v->save();

        $p= new Pet();
        $p->name= 'OdinDeManolo';
        $p->type= 'Perro';
        $p->race= 'Chiguaua';
        $p->age= '8';
        $p->description= 'Esta muy malito';
        $p->medical_history= 'equis vacunas';

        $p->user()->associate($c);
        $c->pets()->save($p);
    }
}




