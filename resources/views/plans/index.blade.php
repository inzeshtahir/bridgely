<x-app-layout>
    <div class="max-w-5xl mx-auto py-10">
        <h2 class="text-3xl font-bold text-center text-[var(--blue-main)]">Choose a Plan</h2>
        <div class="grid md:grid-cols-2 gap-6 mt-10">
            @foreach($plans as $plan)
                <div class="border rounded-lg p-6 shadow bg-white">
                    <h3 class="text-xl font-semibold text-[var(--blue-accent)]">{{ $plan->name }}</h3>
                    <p class="text-gray-600">${{ number_format($plan->price, 2) }}/mo</p>
                    <ul class="mt-4 space-y-1 text-sm text-gray-700">
                        @foreach(json_decode($plan->features) as $feature)
                            <li>✔ {{ $feature }}</li>
                        @endforeach
                    </ul>
                    <a href="#" class="mt-4 inline-block bg-[var(--blue-main)] text-white px-4 py-2 rounded hover:bg-[var(--blue-accent)]">Subscribe</a>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
