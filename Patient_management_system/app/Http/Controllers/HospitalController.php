<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function doctorsRegister()
    {
        return view('doctors_register');
    }

    public function patientAppointment()
    {
        return view('patient_appointment');
    }

    public function ourServices()
    {
        return view('our_services');
    }

    public function about()
    {
        return view('about');
    }

    public function systemRegister()
    {
        return view('system_register');
    }

    public function login()
    {
        return view('login');
    }
}
