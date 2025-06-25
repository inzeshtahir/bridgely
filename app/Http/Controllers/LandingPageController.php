<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;
use App\Models\Testimonial;
use App\Models\Contact;

class LandingPageController extends Controller
{
    public function index()
    {
        $features = Feature::all();
        $testimonials = Testimonial::all();
        return view('welcome', compact('features', 'testimonials'));
    }

    public function storeContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        Contact::create($validated);

        return redirect()->back()->with('success', 'Thanks for contacting us!');
    }
    public function submitCrmConnect(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    // You can later store to DB or send email
    return back()->with('success', 'Your CRM integration request has been submitted.');
}

}
