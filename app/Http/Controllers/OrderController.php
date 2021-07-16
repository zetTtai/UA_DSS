<?php

namespace App\Http\Controllers;
use App\Order;
use App\Lineorder;
use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class OrderController extends Controller
{
     //
     public function createOrder()
     {
         return view('order/createOrder'); //blade
     }
 
    
 
     // Almacenar datos
     public function storeOrder(Order $order)
     {
         $date= request('date');
         $totalprice= request('totalprice');
         $status= request('status');
         $iduser= request('user_id');
         $idOrd= request('id');
    
         $ord= Order::create([
             'date' => $date,
             'totalprice' => $totalprice,
             'status' => $status,
             'user_id'=> $iduser

         ]);
         $cart= session()->get('cart');


        if (is_array($cart) || is_object($cart)){
            foreach($cart as $id){
                
                $l= Lineorder::create([
                    'amount' => $id['quantity'],
                    'order_id' => $ord->id,
                    'product_id' => $id['id_prod']
                ]);

                $resto= $id['stock'] - $id['quantity'];
                DB::table('products')->where(['id' => $id['id_prod']])->update(['stock' => $resto]);
            }
        }


        
        session()->pull('cart', $cart);
         return redirect()->route('order.showAll');
     }

     
 
      // Editar
      public function editOrder($id)
      {
          $order= Order::findOrfail($id);
          return view('order/editOrder', ['order' => $order, 'id' => $id]);
      }
  
      // Actualizar
      public function updateOrder(Order $order)
      {
          $order->update([
              'date' => request('date'),
              'totalprice' => request('totalprice'),
              'status' => request('status')

           
          ]);
          return redirect()->route('order.showAll');
      }
 
 
       // Filtrar por ID
     /*public function showUser($id)
     {
         $user= User::findOrFail($id);
         //if(!$users) // No encontrado
           //  return view('user/notFound');
         return view('user/showUser', compact('user'));
     }*/
 
 
     
     // Filtrar por ID
     public function showOrder(Order $order)
     {
         $idOrder= $order->id;
         $order1= Order::findOrFail($idOrder);
         //if(!$users) // No encontrado
         //  return view('user/notFound');
         return view('order/showOrder', compact('order'));
     }
 
 
     /*// Filtrar por Nombre
     public function showUserByName(Order $order)
     {
         $nameUser= $user->name;
         $user1= User::findOrFail($nameUser);
         //if(!$users) // No encontrado
         //  return view('user/notFound');
         return view('user/userIndex', compact('user'));;
     }
    */
 
     public function deleteOrder(Order $order)
     {
         $order->delete();
         return redirect()->route('order.showAll');
     }
 
     public function ShowAll()
     {   
         //$name= $request->get('name');
         //$dni= $request->get('dni');
         
         if (Auth::user()->client != 1){
            $orders= Order::simplePaginate(2);
        }
        else{
            $orders= Order::query()->where('user_id','=',Auth::user()->id)->simplePaginate(2);
        }
         return view('order/orderIndex', compact('orders')); //blade
     }
}