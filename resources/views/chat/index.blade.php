<div x-data="{ messages: @entangle('messages'), input: '', loading: false }"
     class="max-w-2xl mx-auto mt-10 bg-white p-6 rounded shadow">
    <div class="space-y-3 h-96 overflow-y-auto" x-ref="chatBox">
        <template x-for="message in messages" :key="message.id">
            <div x-transition class="p-3 rounded" :class="message.role === 'user' ? 'bg-blue-100 text-right' : 'bg-gray-100 text-left'">
                <p x-text="message.content"></p>
            </div>
        </template>
    </div>
    <div class="flex mt-4">
        <input x-model="input" @keydown.enter="send" placeholder="Type a message..."
               class="flex-grow p-2 border rounded-l">
        <button @click="send" class="bg-blue-600 text-white px-4 rounded-r" x-text="loading ? '...' : 'Send'"></button>
    </div>
</div>

<script>
function send() {
    this.loading = true;
    fetch('/chat/send', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
        body: JSON.stringify({ message: this.input })
    })
    .then(res => res.json())
    .then(data => {
        this.messages.push(...data);
        this.input = '';
        this.loading = false;
        this.$nextTick(() => this.$refs.chatBox.scrollTop = this.$refs.chatBox.scrollHeight);
    });
}
</script>
