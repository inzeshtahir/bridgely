@extends('layouts.app')

@section('content')
<div class="bg-white text-black font-sans">
    <!-- Hero Section -->
    <section class="bg-blue-900 text-white p-10 text-center">
        <h1 class="text-4xl font-bold mb-2">🚀 Your 24/7 Outsourcing Partner</h1>
        <p class="text-lg mb-6">Customer service, IT support, and web dev for US, UK, CA, AU clients</p>
        <div class="flex justify-center gap-4">
            <a href="#contact" class="bg-white text-blue-900 px-6 py-2 rounded font-semibold">Book a Demo</a>
            <span class="border px-6 py-2 rounded">🤖 Coming Soon: AI Chatbot</span>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-10 bg-yellow-50 text-center">
        <h2 class="text-3xl font-bold mb-6">Why Choose BRIDGELY360? 💡</h2>
        <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto px-4">
            <div class="bg-white p-6 border rounded shadow">
                <h3 class="font-bold text-xl mb-2">🌐 Global Reach</h3>
                <p>Serving clients in the US, UK, Canada, and Australia</p>
            </div>
            <div class="bg-white p-6 border rounded shadow">
                <h3 class="font-bold text-xl mb-2">📊 100% Results</h3>
                <p>We deliver what we promise with measurable impact</p>
            </div>
            <div class="bg-white p-6 border rounded shadow">
                <h3 class="font-bold text-xl mb-2">🕐 24/7 Service</h3>
                <p>Trained staff across timezones for continuous support</p>
            </div>
        </div>
    </section>

    <!-- Reviews -->
    <section class="py-10 text-center bg-gray-100">
        <h2 class="text-3xl font-bold mb-4">Client Reviews 🌟</h2>
        <div class="flex flex-wrap justify-center gap-6 px-4">
            @foreach ([
                ['Locked AI', 'Incredible turnaround time and ROI.', 5],
                ['Jumbo DTG', 'Highly responsive and professional.', 4.9],
                ['Insurance Co.', 'Reliable and trustworthy.', 4.8],
                ['Auto Dealer', 'Excellent service delivery.', 5],
                ['Real Estate', 'Long-term partnership success.', 4.8],
            ] as [$client, $quote, $rating])
                <div class="bg-white p-6 w-72 rounded shadow border">
                    <p class="text-yellow-400 text-xl mb-2">
                        @for ($i = 0; $i < floor($rating); $i++) ★ @endfor
                        @if ($rating - floor($rating) >= 0.5) ☆ @endif
                    </p>
                    <p class="italic mb-2">"{{ $quote }}"</p>
                    <p class="font-bold">{{ $client }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-10 max-w-4xl mx-auto px-4">
        <h2 class="text-3xl font-bold mb-6 text-center">FAQs ❓</h2>
        <div class="space-y-4">
            @foreach([
                ['What services do you offer?', 'Customer service, IT helpdesk, web development, CRM, and cold calling.'],
                ['Where are your clients located?', 'We serve clients from the US, UK, Canada, and Australia.'],
                ['Do you offer seasonal support?', 'Yes, we offer flexible plans for seasonal surges.'],
                ['What’s your pricing model?', 'We offer hourly and monthly contracts with no lock-in.'],
                ['Do you use AI for automation?', 'Yes, we’re integrating AI support and appointment features.'],
            ] as [$question, $answer])
                <details class="bg-gray-100 p-4 rounded shadow">
                    <summary class="cursor-pointer font-semibold">{{ $question }}</summary>
                    <p class="mt-2 text-gray-700">{{ $answer }}</p>
                </details>
            @endforeach
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="bg-blue-50 py-10 px-4 text-center">
        <div class="max-w-xl mx-auto bg-white p-8 rounded shadow border">
            <h2 class="text-2xl font-bold mb-4">📩 Contact Us</h2>
            <p>Email: <a href="mailto:bridgely360@gmail.com" class="text-blue-700 underline">bridgely360@gmail.com</a></p>
            <p>Phone: <a href="tel:+12269930886" class="text-blue-700 underline">+1 226-993-0886</a></p>
        </div>
    </section>
</div>
@endsection
