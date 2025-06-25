@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto mt-10 p-6 bg-white rounded shadow">
    <h2 class="text-xl font-bold text-blue-700 mb-4">Book an Appointment</h2>

    <form method="POST" action="{{ route('appointment.send') }}">
        @csrf
        <input type="text" name="name" class="w-full mb-4 p-3 border rounded" placeholder="Your Name" required>
        <input type="email" name="email" class="w-full mb-4 p-3 border rounded" placeholder="Your Email" required>
        <input type="datetime-local" name="datetime" class="w-full mb-4 p-3 border rounded" required>
        <textarea name="message" class="w-full mb-4 p-3 border rounded" placeholder="Your Message"></textarea>

        <button type="submit" class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-800">Book Appointment</button>
    </form>
</div>
@endsection
