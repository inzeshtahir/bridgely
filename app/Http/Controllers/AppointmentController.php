<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentConfirmation;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'appointment_time' => 'required|date',
        ]);

        $appointment = Appointment::create([
            'user_id' => \Illuminate\Support\Facades\Auth::id(),
            'name' => $data['name'],
            'email' => $data['email'],
            'appointment_time' => $data['appointment_time'],
        ]);

        Mail::to($data['email'])->send(new AppointmentConfirmation($appointment));

        return back()->with('success', 'Appointment booked successfully!');
    }
}
