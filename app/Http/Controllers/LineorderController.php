<?php

namespace App\Http\Controllers;
use App\Lineorder;

use Illuminate\Http\Request;

class LineorderController extends Controller
{
    //
    public function createLineorder()
    {
        return view('lineorder/createLineorder'); //blade
    }


    // Almacenar datos
    public function storeLineorder(Lineorder $lineorder)
    {
        $amount= request('amount');

   
        Lineorder::create([
            'amount' => $amount,


        ]);
        return redirect()->route('lineorder.showAll');
    }
    
     // Editar
     public function editLineorder($id)
     {
         $lineorder= Lineorder::findOrfail($id);
         return view('lineorder/editLineorder', ['lineorder' => $lineorder, 'id' => $id]);
     }
 
     // Actualizar
     public function updateLineorder(Lineorder $lineorder)
     {
         $lineorder->update([
             'amount' => request('amount'),
            

          
         ]);
         return redirect()->route('lineorder.showAll');
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
    public function showLineorder(Lineorder $lineorder)
    {
        $idLineorder= $lineorder->id;
        $lineorder1= Lineorder::findOrFail($idLineorder);
        //if(!$users) // No encontrado
        //  return view('user/notFound');
        return view('lineorder/showLineorder', compact('lineorder'));
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

    public function deleteLineorder(Lineorder $lineorder)
    {
        $lineorder->delete();
        return redirect()->route('lineorder.showAll');
    }

    public function ShowAll()
    {   
        //$name= $request->get('name');
        //$dni= $request->get('dni');
        $lineorders= Lineorder::simplePaginate(2);
        return view('lineorder/lineorderIndex', compact('lineorders')); //blade
    }
}
