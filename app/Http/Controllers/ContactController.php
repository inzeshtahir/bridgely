<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // You can customize this mail logic
        Mail::raw($validated['message'], function ($message) use ($validated) {
            $message->to('bridgely360@gmail.com')
                    ->subject('New Demo Request from ' . $validated['name'])
                    ->replyTo($validated['email']);
        });

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
