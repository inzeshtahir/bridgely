@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto mt-10">
    <h2 class="text-2xl font-bold mb-6 text-center">Book an Appointment</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-4 mb-4 rounded">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('appointments.book') }}">
        @csrf
        <div class="mb-4">
            <label for="name">Your Name</label>
            <input name="name" class="w-full p-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label for="email">Your Email</label>
            <input name="email" type="email" class="w-full p-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label for="appointment_time">Date & Time</label>
            <input name="appointment_time" type="datetime-local" class="w-full p-2 border rounded" required>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Book Now</button>
    </form>
</div>
@endsection
