@extends('layouts.app')

@section('content')
<div class="bg-gray-100 py-10 px-6">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold text-[var(--blue-main)] mb-6 text-center">CRM / API Integration</h1>

        <p class="text-lg text-gray-700 mb-8 text-center">
            Seamlessly connect your existing CRM or software tools with Bridgely.ai. Automate communication, manage customer data, and deliver real-time AI-assisted support without switching platforms.
        </p>

        <div class="grid md:grid-cols-2 gap-6 mb-12">
            <div class="bg-white p-6 rounded shadow-md">
                <h2 class="text-2xl font-semibold text-[var(--blue-accent)] mb-2">Supported Platforms</h2>
                <ul class="list-disc list-inside text-gray-600">
                    <li>HubSpot</li>
                    <li>Salesforce</li>
                    <li>Zoho CRM</li>
                    <li>Freshdesk</li>
                    <li>Zendesk</li>
                    <li>Custom REST APIs</li>
                </ul>
            </div>

            <div class="bg-white p-6 rounded shadow-md">
                <h2 class="text-2xl font-semibold text-[var(--blue-accent)] mb-2">Benefits</h2>
                <ul class="list-disc list-inside text-gray-600">
                    <li>Faster response times</li>
                    <li>AI-assisted CRM ticket handling</li>
                    <li>Reduced support costs</li>
                    <li>Automated lead follow-ups</li>
                    <li>24/7 system uptime monitoring</li>
                </ul>
            </div>
        </div>

        <h3 class="text-xl font-bold mb-4 text-center text-[var(--blue-main)]">Request CRM Integration</h3>
        @if(session('success'))
            <p class="text-green-600 text-center mb-4">{{ session('success') }}</p>
        @endif
        <form method="POST" action="{{ route('crm.connect.submit') }}" class="max-w-xl mx-auto space-y-4">
            @csrf
            <input name="name" placeholder="Your Name" class="w-full p-3 border border-gray-300 rounded" required>
            <input name="email" placeholder="Your Email" type="email" class="w-full p-3 border border-gray-300 rounded" required>
            <textarea name="message" rows="4" placeholder="Tell us about your CRM or integration needs..." class="w-full p-3 border border-gray-300 rounded" required></textarea>
            <button type="submit" class="bg-[var(--blue-main)] text-white px-6 py-2 rounded hover:bg-[var(--blue-accent)]">
                Request Integration
            </button>
        </form>
    </div>
</div>
@endsection
