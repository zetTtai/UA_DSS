<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function createUser()
    {
        return view('user/createUser'); //blade
    }


    // Almacenar datos
    public function storeUser(Request $request)
    {

        $this->validate($request, [
            'client'=>['required'],
            'name' => ['required', 'string' ,'max:20'], 
            'dni' => ['required', 'string' , 'max:9'],
            'phone' => ['required', 'int', 'digits_between:9,9'],
            'email' => ['required', 'string' , 'max:25'],
            'password' => ['required', 'string' , 'max:20', 'confirmed'],
            'account' => ['required', 'string' , 'max:50'],
            'adress' => ['required', 'string' , 'max:20'],
            'salary' => ['required', 'int' , 'max:20'],
            'ocuppation' => ['required', 'string' , 'max:30'],
            ]);

        $client= request('client');
        $name= request('name');
        $dni= request('dni');
        $email= request('email');
        $password= request('password');
        $phone= request('phone');
        $account= request('account');
        $adress= request('adress');
        $salary= request('salary');
        $ocuppation= request('ocuppation');


        User::create([
            'client' => $client,
            'name' => $name,
            'dni' => $dni,
            'email' => $email,
            'password' => $password,
            'phone' => $phone,
            'account' => $account,
            'adress' => $adress,
            'salary' => $salary,
            'ocuppation' => $ocuppation
        ]);
        return redirect()->route('user.showAll');
    }

    // Editar
    public function editUser($id)
    {
        $user= User::findOrfail($id);
        return view('user/editUser', ['user' => $user, 'id' => $id]);
    }

    // Actualizar
    public function updateUser(User $user, Request $request)
    {
        $this->validate($request, [
                                'client'=>['required'],
                                'name' => ['required', 'string' ,'max:100'], 
                                'dni' => ['required', 'string' , 'max:9'],
                                'phone' => ['required', 'int', 'digits_between:9,9'],
                                'email' => ['required', 'string' , 'max:100'],
                                'password' => ['required', 'string' , 'max:20', 'confirmed'],
                                'account' => ['required', 'string' , 'max:50'],
                                'adress' => ['required', 'string' , 'max:20'],
                                'salary' => ['required', 'int' , 'max:20'],
                                'ocuppation' => ['required', 'string' , 'max:30'],
                                ]);
        $user->update([
            'client' => request('client'),
            'name' => request('name'),
            'dni' => request('dni'),
            'phone' => request('phone'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'account' => request('account'),
            'adress' => request('adress'),
            'salary' => request('salary'),
            'ocuppation' => request('ocuppation'),
        
        ]);

    
        return redirect()->route('user.showAll');
         
    }
    // Actualizar
    public function editProfile(User $user, Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string' ,'max:20'], 
            'dni' => ['required', 'string' , 'max:9'],
            'phone' => ['required', 'int', 'digits_between:9,9'],
            'email' => ['required', 'string' , 'max:100'],
            'password' => ['max:20', 'confirmed'],
            'account' => ['required', 'string' , 'max:50'],
            'adress' => ['required', 'string' , 'max:20'],
            'salary' => ['int' , 'max:20'],
            'ocuppation' => ['string' , 'max:30'],
            ]);
        $pass;
        if(request('password') == "")
            $pass= $user->password;
        else
            $pass= Hash::make(request('password'));
        $user->update([
            'name' => request('name'),
            'dni' => request('dni'),
            'email' => request('email'),
            'password' => $pass,
            'account' => request('account'),
            'adress' => request('adress'),  
        ]);
        return redirect()->route('perfil');
    }

    
    // Filtrar por ID
    public function showUser(User $user)
    {
        $idUser= $user->id;
        $user1= User::findOrFail($idUser);
        //if(!$users) // No encontrado
        //  return view('user/notFound');
        return view('user/showUser', compact('user'));
    }


    public function deleteUser(User $user)
    {
        $user->delete();
        return view('Inicio');
    }



    public function filter(Request $request){

        $type = $request->type; //Poner request
                                //Paginate reinicia todo
                                //Revisar ruta

        $variablesurl=$request->all();

        if($type==1 ){
            $users = User::orderBy('id', 'DESC') -> simplePaginate(2)->appends($variablesurl);
    
            return view('user/userIndex', compact('users'));
        }
        else{
           if($type==2){
                $users = User::orderby('name', 'ASC') -> simplePaginate(2)->appends($variablesurl);
                return view('user/userIndex', compact('users'));
            }
            else{
                if($type==3){
                    $users = User::orderBy('dni', 'ASC') -> simplePaginate(2)->appends($variablesurl);
                    return view('user/userIndex', compact('users'));
                }
                else{
                    $users= User::simplePaginate(2)->appends($variablesurl);
                    return view('user/userIndex', compact('users'));
                }
            }
        }
    }

    public function ShowAll()
    {   
        //$name= $request->get('name');
        //$dni= $request->get('dni');
        $users= User::simplePaginate(2);
        return view('user/userIndex', compact('users')); //blade
    }

    // Filtrar por Nombre
    public function ByName()
    {
        $name= request('name');
        $users= User::all()->where('name', $name);
        return view('user/userIndexFiltro',compact('users'));
    }

    // Filtrar por Edad
    public function ByDNI()
    {
        $dni= request('dni');
        $users= User::all()->where('dni', $dni);
        return view('user/userIndexFiltro',compact('users'));
    }
    
}
