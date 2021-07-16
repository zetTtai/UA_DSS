<?php

namespace App\Http\Controllers;
use App\Appointment;
use App\User;
use App\Pet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    public function createAppointment()
    {
        $users = User::all();
        $pets = Pet::all();
        return view('appointment/createAppointment', ['users' => $users, 'pets' => $pets]);
    }

        // Almacenar datos
        public function storeAppointment(Request $request)
        {
            $this->validate($request, ['appointment'=>['required', 'int', 'max:10'], 'price'=>'required', 'description'=>['required', 'string', 'max:255'],'idCuidador'=>'required','user_id'=>'required','pet_id'=>'required']);
    
    
            $appointment= request('appointment');
            $price= request('price');
            $description= request('description');
            $idCuidador= request('idCuidador');
            $user_id= request('user_id');
            $pet_id= request('pet_id');
    
            Appointment::create([
                'appointment' => $appointment,
                'price' => $price,
                'description' => $description,
                'idCuidador' => $idCuidador,
                'user_id' => $user_id,
                'pet_id' => $pet_id
    
                //$pets= Pet::query()->where('user_id','=',Auth::user()->id)
            ]);
            return redirect()->route('appointment.showAll');
        }

    


    // Editar
    public function editAppointment($id)
    {
        $appointment= Appointment::findOrfail($id);
        return view('appointment/editAppointment', ['appointment' => $appointment, 'id' => $id]);
    }    

    // Actualizar
    public function updateAppointment(Request $request, Appointment $appointment)
    {
        $this->validate($request, ['appointment'=>['required', 'int', 'max:10'], 'price'=>'required', 'description'=>['required', 'string', 'max:255']]);
        $appointment->update([
            'appointment' => request('appointment'),
            'price' => request('price'),
            'description' => request('description')
        ]);
        return redirect()->route('appointment.showAll');
    }    

    // Borrar
    public function deleteAppointment(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('appointment.showAll');
    }

    //
    public function ShowAll()
    {
        

        if(Auth::user()->client == 1){
            $appointments= Appointment::query()->where('idCuidador','=', Auth::user()->id)->simplePaginate(2);
            
        }
        else{
            if(Auth::user()->client == 0){
                $appointments= Appointment::query()->where('user_id','=', Auth::user()->id)->simplePaginate(2);
            }
            else{
                $appointments= Appointment::simplePaginate(2);
            }
           
        }
        
        
        return view('appointment/appointmentIndex', compact('appointments'));
    }

    // Filtrar por ID
    public function showAppointment(Appointment $appointment)
    {
        $idAppointment= $appointment->id;
        $appointment= Appointment::findOrFail($idAppointment);
        //if(!$users) // No encontrado
        //  return view('user/notFound');
        return view('appointment/showAppointment', compact('appointment'));
    }

    // Filtrar por Appointment
    public function ByAppointment()
    {
        $appointment= request('appointment');
        $appointments= Appointment::all()->where('appointment', $appointment);
        return view('appointment/appointmentIndexFiltro',compact('appointments'));
    }

    // Filtrar por Appointment
    public function ByPrice()
    {
        $price= request('price');
        $appointments= Appointment::all()->where('price', $price);
        return view('appointment/appointmentIndexFiltro',compact('appointments'));
    }
}
