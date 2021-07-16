<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Pet;
use App\Appointment;

class AppointmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c = new User(); // Veterinario
        $c->name = 'Pepe';
        $c->client= false;
        $c->dni = '54576312X';
        $c->email = 'pepe@gmail.com';
        $c->password = Hash::make('12345678');
        $c->phone = '574829111';

        $c->account= '0';
        $c->adress= 'null';

        $c->salary= '12000';
        $c->ocuppation= 'Cirujano';
        $c->save();

        $p= new Pet();
        $p->name= 'Max';
        $p->type= 'Perro';
        $p->race= 'Pastor aleman';
        $p->age= '8';
        $p->description= 'Esta muy malito';
        $p->medical_history= 'equis vacunas';

        $p->user()->associate($c); // Deberia ser cliente
        $c->pets()->save($p);

        $a = new Appointment();
        $a->appointment = '5';
        $a->description = 'La consulta será el 15/05/2021 para vacuna de gato';
        $a->price = '70';
        $a->idCuidador = '1';
        
        $a->user()->associate($c);
        $a->pet()->associate($p);
        $c->appointments()->save($a);
        $p->appointments()->save($a);
    
    }
}
