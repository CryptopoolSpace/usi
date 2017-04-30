<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Appointment;
use App\Http\Requests;

class PatientController extends Controller
{
    //
    
    public function create(){
        $data = request()->all();
        $patient = new Patient();
        $patient->first_name = array_get($data, "first_name");
        $patient->last_name = array_get($data, "last_name");
        $patient->phone = array_get($data, "phone");
        $patient->gender = array_get($data, "gender");
        $patient->birthday = array_get($data, "birthday");
        $patient->email = array_get($data, "email");
        $patient->save();
        return response()->json(["id"=>$patient->id]);
    }
    
    public function get(){
        $id = request()->route("id");
        $patient = Patient::find($id);
        return response()->json($patient);
    }
    public function getAppointments(){
        $id = request()->route("id");
        $patient = Patient::find($id);
        $appointments = $patient->appointments;
        return response()->json($appointments);
    }
 public function getAppointment(){
        $id = request()->route("id");
        $patient = Patient::find($id);
        $appointments = $patient->appointments;
        $appointment_id = request()->route("appointment_id");
        $appointment = Appointment::find($appointment_id);
        return response()->json($appointment);
    }
    public function show(){
        $patients = Patient::all();
        return response()->json($patients);
    }
}