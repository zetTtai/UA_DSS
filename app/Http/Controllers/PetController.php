<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Pet;

class PetController extends Controller
{
    public function createPet()
    {
        return view('pet/createPet');
    }

    // Almacenar datos
    public function storePet(Request $request)
    {

        $this->validate($request, ['name'=> ['required', 'string', 'max:100'], 'type'=>['required', 'string', 'max:50'], 'race'=>['required', 'string', 'max:50'],'age'=>['required', 'int', 'digits_between:1,3'],'description'=>['required', 'string', 'max:255'],'medical_history'=>['required', 'string', 'max:255'], 'user_id'=>['required', 'int', 'digits_between:1,5']]);
        


        $name= request('name');
        $type= request('type');
        $race= request('race');
        $age= request('age');
        $description= request('description');
        $medical_history= request('medical_history');
        $user_id= request('user_id');

        Pet::create([
            'name' => $name,
            'type' => $type,
            'race' => $race,
            'age' => $age,
            'description' => $description,
            'medical_history' => $medical_history,
            'user_id' => $user_id
        ]);
        return redirect()->route('pet.showAll');
    }

    // Editar
    public function editPet($id)
    {
        $pet= Pet::findOrfail($id);
        return view('pet/editPet', ['pet' => $pet, 'id' => $id]);
    }

    // Actualizar
    public function updatePet(Request $request, Pet $pet)
    {

        $this->validate($request, ['name'=> ['required', 'string', 'max:100'], 'type'=>['required', 'string', 'max:50'], 'race'=>['required', 'string', 'max:50'],'age'=>['required', 'int', 'digits_between:1,3'],'description'=>['required', 'string', 'max:255'],'medical_history'=>['required', 'string', 'max:255']]);


        $pet->update([
            'name' => request('name'),
            'type' => request('type'),
            'race' => request('race'),
            'age' => request('age'),
            'description' => request('description'),
            'medical_history' => request('medical_history')
        ]);
        return redirect()->route('pet.showAll');
    }

    public function deletePet(Pet $pet)
    {
        $pet->delete();
        return redirect()->route('pet.showAll');
    }

    // Listar
    public function ShowAll(Request $request)
    {
        $name= $request->get('name');
        $age= $request->get('age');
        $idUser= $request->get('user_id');


        
        //$pets= Pet::simplePaginate(2);
    
        if (Auth::user()->client != 1){
            $pets= Pet::simplePaginate(2);
        }
        else{
            $pets= Pet::query()->where('user_id','=',Auth::user()->id)->simplePaginate(2);
        }

        
        //$pets= Pet::orderBy('id')->name($name)->age($age);
        return view('pet/petIndex', compact('pets'));
    }


    

    // Filtrar por ID
    public function showPet($id)
    {
        $pet= Pet::find($id);
        if(!$pet) // No encontrado
            return view('pet/notFound');
        return view('pet/showPet', ['pet' => $pet]);
    }


    public function filter(Request $request){

        $type = $request->type; //Poner request
                                //Paginate reinicia todo
                                //Revisar ruta

        $variablesurl=$request->all();

        if($type==1 ){

            if(Auth::user()->client == 1){
                $pets= Pet::query()->orderBy('id', 'DESC')->where('user_id','=',Auth::user()->id)->simplePaginate(2)->appends($variablesurl);
            }
            else{
                $pets = Pet::orderBy('id', 'DESC') -> simplePaginate(2)->appends($variablesurl);

            }

            return view('pet/petIndex', compact('pets'));
        }
        else{
           if($type==2){
                if(Auth::user()->client == 1){
                    $pets= Pet::query()->orderBy('name', 'ASC')->where('user_id','=',Auth::user()->id)->simplePaginate(2)->appends($variablesurl);

                }
                else{
                    $pets = Pet::orderBy('name', 'ASC')-> simplePaginate(2)->appends($variablesurl);
    
                }
                return view('pet/petIndex', compact('pets'));
            }
            else{
                if($type==3){
                    if(Auth::user()->client == 1){
                        $pets= Pet::query()->orderBy('type', 'ASC')->where('user_id','=',Auth::user()->id)->simplePaginate(2)->appends($variablesurl);
    
                    }
                    else{
                        $pets = Pet::orderBy('type', 'ASC') -> simplePaginate(2)->appends($variablesurl);
        
                    }
                    return view('pet/petIndex', compact('pets'));
                }
                else{
                    
                    if(Auth::user()->client == 1){
                        $pets= Pet::query()->orderBy('id', 'ASC')->where('user_id','=',Auth::user()->id)->simplePaginate(2)->appends($variablesurl);
    
                    }
                    else{
                        $pets = Pet::orderBy('id', 'ASC') -> simplePaginate(2)->appends($variablesurl);
        
                    }
                    return view('pet/petIndex', compact('pets'));
                }
            }
        }
    }

    // Filtrar por Nombre
    public function ByName()
    {
        $name= request('name');
        $pets= Pet::all()->where('name', $name);
        return view('pet/petIndexFiltro',compact('pets'));
    }

    // Filtrar por Edad
    public function ByAge()
    {
        $age= request('age');
        $pets= Pet::all()->where('age', $age);
        return view('pet/petIndexFiltro',compact('pets'));
    }
}
