<?php

use Illuminate\Database\Seeder;
use App\Product;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p= new Product();
        $p->name= 'Comida de Gato';
        $p->brand= 'Pienzo';
        $p->type= 'Comida';
        $p->description= 'Muy nutritiva';
        $p->price= '25';
        $p->stock= '4';
        $p->quantity= '1';
        $p->save();

        $p= new Product();
        $p->name= 'Comida de tortuga';
        $p->brand= 'gambitas';
        $p->type= 'Comida';
        $p->description= 'Muy nutritiva';
        $p->price= '13';
        $p->stock= '14';
        $p->quantity= '1';
        $p->save();

        $p= new Product();
        $p->name= 'Comida de otros';
        $p->brand= 'otros';
        $p->type= 'Comida';
        $p->description= 'Muy nutritiva';
        $p->price= '13';
        $p->stock= '14';
        $p->quantity= '1';
        $p->save();


        $p= new Product();
        $p->name= 'Comida de peces';
        $p->brand= 'cositas naranjas';
        $p->type= 'Comida';
        $p->description= 'Muy nutritiva';
        $p->price= '13';
        $p->stock= '14';
        $p->quantity= '1';
        $p->save();


        $p= new Product();
        $p->name= 'Acuario';
        $p->brand= 'Aquariums';
        $p->type= 'Habitat';
        $p->description= 'Mucho espacio';
        $p->price= '255';
        $p->stock= '2';
        $p->quantity= '1';
        $p->save();

        $p= new Product();
        $p->name= 'Terrario';
        $p->brand= 'Terras';
        $p->type= 'Habitat';
        $p->description= 'Capacidad para 3 tortugas';
        $p->price= '341';
        $p->stock= '1';
        $p->quantity= '1';
        $p->save();

        $p= new Product();
        $p->name= 'Caseta';
        $p->brand= 'Tarradella';
        $p->type= 'Habitat';
        $p->description= 'Capacidad para 1 perro';
        $p->price= '341';
        $p->stock= '2';
        $p->quantity= '1';
        $p->save();

        $p= new Product();
        $p->name= 'Jersey';
        $p->brand= 'Massimo Duty';
        $p->type= 'Ropa';
        $p->description= 'Cómoda y abrigada';
        $p->price= '32';
        $p->stock= '12';
        $p->quantity= '1';
        $p->save();
    }
}
