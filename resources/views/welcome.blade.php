<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bridgely.ai - Business Process Outsourcing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        :root {
            --blue-main: #0d47a1;
            --blue-accent: #1976d2;
            --black: #121212;
        }
    </style>
</head>
<body class="bg-black text-white font-sans">

    <header class="bg-[var(--blue-main)] p-6 shadow-md">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-bold">Bridgely<span class="text-[var(--blue-accent)]">.ai</span></h1>
            <nav class="space-x-4 text-white text-sm">
                <a href="/services" class="hover:underline">Services</a>
                <a href="/ai-chat" class="hover:underline">AI Chatbot</a>
                <a href="/helpdesk" class="hover:underline">IT Helpdesk</a>
                <a href="/comms" class="hover:underline">Com Software</a>
                <a href="/pricing" class="hover:underline">Pricing</a>
                <a href="/about" class="hover:underline">About</a>
                <a href="/login" class="bg-white text-black px-3 py-1 rounded">Login</a>
            </nav>
        </div>
    </header>

    <section class="text-center py-20 px-4">
        <h2 class="text-4xl sm:text-5xl font-extrabold mb-6 text-[var(--blue-accent)]">
            Focus on Growth. We Handle the Rest.
        </h2>
        <p class="text-lg max-w-2xl mx-auto mb-8">
            24/7 customer support, AI automation, IT helpdesk and communication tools — all in one place. Let your team thrive while we handle the backend.
        </p>
        <div class="space-x-4">
            <a href="/register" class="bg-[var(--blue-accent)] text-white px-6 py-2 rounded hover:bg-blue-700">Get Started</a>
            <a href="/pricing" class="border border-[var(--blue-accent)] text-[var(--blue-accent)] px-6 py-2 rounded hover:bg-blue-700 hover:text-white">View Plans</a>
        </div>
    </section>

    <section class="bg-white text-black py-16 px-6">
        <h3 class="text-2xl font-bold text-center mb-10">What Our Clients Say</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <div class="bg-gray-100 p-6 rounded shadow">
