<x-app-layout>
@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto mt-10 p-6 bg-white rounded shadow">
    <h1 class="text-3xl font-bold text-gray-800 mb-4">Welcome, {{ Auth::user()->name }}</h1>
    <p>Use the sidebar or top navigation to access Chatbot, CRM tools, or Appointments.</p>
</div>
@endsection

<div class="max-w-2xl mx-auto py-12">
        <h1 class="text-3xl font-bold mb-6 text-center">Choose Your Plan</h1>

        <form action="{{ route('subscribe') }}" method="POST" id="payment-form">
            @csrf
            <select name="plan" class="border p-2 mb-4 w-full">
                <option value="basic">Basic - $10/month</option>
                <option value="pro">Pro - $20/month</option>
            </select>

            <x-stripe-form /> <!-- We'll add this component next -->
            <button class="bg-blue-600 text-white px-4 py-2 rounded mt-4">Subscribe</button>
        </form>
    </div>
</x-app-layout>
