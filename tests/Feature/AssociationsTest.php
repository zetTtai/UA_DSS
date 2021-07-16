<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Client;
use App\Veterinarian;
use App\Appointment;

class AssociationsTest extends TestCase
{

    public function testAssociationClientAndVeterinarianAppointment()
    {
        
        $c = new Client();
        $c->nombre = 'Juan';
        $c->dni = '55632212G';
        $c->email = 'Juan@gmail.com';
        $c->password = 'juan12342';
        $c->telefono = '213456654';
        $c->save();

        $v = new Veterinarian();
        $v->nombre = 'Pepe';
        $v->dni = '55632212G';
        $v->email = 'pepe@gmail.com';
        $v->password = 'pepe12342';
        $v->telefono = '213456654';
        $v->salario = '2000';
        $v->save();

        $a = new Appointment();
        $a->consulta = '5';
        $a->descripcion = 'La consulta será el 15/05/2021 para vacuna de gato';
        $a->precio = '70';

        //$v->appointments();
        //$c->appointments();
        $a->client()->associate($c);
        
        $a->veterinarian()->associate($v);
        $c->appointments()->save($a);
        $v->appointments()->save($a);

        $this->assertEquals($a->client->nombre, 'Juan');
        $this->assertEquals($a->veterinarian->nombre, 'Pepe');
        $this->assertEquals($c->appointments[0]->consulta, '5');
        $this->assertEquals($v->appointments[0]->consulta, '5');

        $c->delete();
        $v->delete();
        $a->delete();
    }


}
