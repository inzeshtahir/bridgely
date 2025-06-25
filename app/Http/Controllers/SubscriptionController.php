<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function showPlans()
    {
        return view('plans');
    }

    public function subscribe(Request $request)
    {
        $user = Auth::user();

        $paymentMethod = $request->paymentMethod;

        $user->createOrGetStripeCustomer();
        $user->updateDefaultPaymentMethod($paymentMethod);

        $user->newSubscription('default', $request->plan)->create($paymentMethod);

        return redirect()->route('dashboard')->with('success', 'Subscribed successfully!');
    }
}
