<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function ShowAll()
    {
        $products= Product::simplePaginate(3);
        return view('product/productIndex', compact('products'));
    }

    public function createProduct()
    {
        return view('product/createProduct');
    }

    // Almacenar datos
    public function storeProduct(Request $request)
    {

        $this->validate($request, ['name' => ['required', 'string' ,'max:20'], 'brand' => ['required', 'string' , 'max:20'], 'type' => ['required', 'string' , 'max:20'], 'description' => ['required', 'string', 'max:255'], 'price' => ['required', 'int', 'digits_between:1,5'], 'stock' => ['required', 'int', 'digits_between:1,4']]);

        $name= request('name');
        $brand= request('brand');
        $type= request('type');
        $description= request('description');
        $price= request('price');
        $stock= request('stock');
        //$imageProd= request('imageProd');

        Product::create([
            'name' => $name,
            'brand' => $brand,
            'type' => $type,
            'description' => $description,
            'price' => $price,
            'stock' => $stock
            //'imageProd' => $imageProd
        ]);
        return redirect()->route('product.showAll');
    }

    // Editar
    public function editProduct($id)
    {
        $product= Product::findOrfail($id);
        return view('product/editProduct', ['product' => $product, 'id' => $id]);
    }

    // Actualizar
    public function updateProduct(Product $product, Request $request)
    {
        $this->validate($request, ['name' => ['required', 'string' ,'max:20'], 'brand' => ['required', 'string' , 'max:20'], 'type' => ['required', 'string' , 'max:20'], 'description' => ['required', 'string', 'max:255'], 'price' => ['required', 'int', 'digits_between:1,5'], 'stock' => ['required', 'int', 'digits_between:1,4']]);
        $product->update([
            'name' => request('name'),
            'brand' => request('brand'),
            'type' => request('type'),
            'description' => request('description'),
            'price' => request('price'),
            'stock' => request('stock')
            //'imageProd' => $imageProd
        ]);
        return redirect()->route('product.showAll');
    }

    public function deleteProduct(Product $product)
    {
        $product->delete();
        return redirect()->route('product.showAll');
    }

    // Filtrar por ID
    public function showProduct(Product $product)
    {
        $idProduct= $product->id;
        $product= Product::findOrFail($idProduct);
        //if(!$users) // No encontrado
        //  return view('user/notFound');
        return view('product/showProduct', compact('product'));
    }

    // Filtrar por Tipo
    public function ByType()
    {
        $type= request('type');
        $products= Product::all()->where('type',$type);
        return view('product/productIndexFiltro',compact('products'));
    }

    // Filtrar por Marca
    public function ByBrand()
    {
        $brand= request('brand');
        $products= Product::all()->where('brand', $brand);
        return view('product/productIndexFiltro',compact('products'));
    }

    public function cart(){
        return view('/product/cart');
    }

    public function addToCart($id){
        $product= Product::find($id);
        $cart= session()->get('cart');

        if(!$cart){
            $cart= [
                $id=> [
                    "name" => $product->name,
                    "brand" => $product->brand,
                    "type" => $product->type,
                    "description" => $product->description,
                    "price" => $product->price,
                    "stock" => $product->stock,
                    "quantity" => 1,
                    "id_prod" => $product->id
                ]
            ];
            if($cart[$id]['stock'] <= '0'){
                return redirect()->back()->with('fail', 'No hay stock del producto');
            }
            else{
                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Producto añadido con exito');
            }
        }

        if(isset($cart[$id])){
            if($cart[$id]['stock'] > $cart[$id]['quantity']){
                $cart[$id]['quantity']++; //OJO   
            }

            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Producto añadido con exito');
        }
        
        $cart[$id]= [
            "name" => $product->name,
            "brand" => $product->brand,
            "type" => $product->type,
            "description" => $product->description,
            "price" => $product->price,
            "stock" => $product->stock,
            "quantity" => 1,
            "id_prod" => $product->id
        ];

        if($cart[$id]['stock'] <= '0'){
            return redirect()->back()->with('fail', 'No hay stock del producto');
        }
        else{
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Producto añadido con exito');
        }
    }



    public function removeFromCart(){
        //$product= Product::find($id);
        $cart= session()->get('cart');

        session()->pull('cart', $cart);
        //session()->forget($id);
        return redirect()->back()->with('success', 'Producto eliminado');

    }
    
}
