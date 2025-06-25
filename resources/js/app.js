import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
    encrypted: true
});

window.Echo.channel('chat')
    .listen('ChatMessageSent', (e) => {
        const box = document.getElementById('chat-box');
        box.innerHTML += `<div class="mt-4 text-green-700 font-medium">${e.message}</div>`;
        box.scrollTop = box.scrollHeight;
    });
