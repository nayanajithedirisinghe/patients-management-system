<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    // Show the appointment form
    public function create()
    {
        return view('patient_appointment');
    }

    // Store the appointment data
    public function store(Request $request)
    {
        // Validate the input data
        $validated = $request->validate([
            'patient_name' => 'required|string|max:255',
            'doctor' => 'required|string|max:255',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required|time',
            'phone' => 'required|string|max:15',
        ]);

        // Store the validated data in the database
        Appointment::create([
            'patient_name' => $validated['patient_name'],
            'doctor_name' => $validated['doctor'],
            'appointment_date' => $validated['appointment_date'],
            'appointment_time' => $validated['appointment_time'],
            'phone' => $validated['phone'],
        ]);

        // Redirect back with a success message
        return redirect()->route('patient.appointment')
            ->with('success', 'Appointment booked successfully!');
    }
}
