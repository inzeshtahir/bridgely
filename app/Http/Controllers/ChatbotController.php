<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ChatPrompt;
use OpenAI;

class ChatbotController extends Controller
{
    public function index()
    {
        $history = ChatPrompt::where('user_id', Auth::id())->latest()->take(10)->get();
        return view('chat.index', compact('history'));
    }

    public function ask(Request $request)
    {
        $request->validate(['prompt' => 'required']);

        $client = OpenAI::client(env('OPENAI_API_KEY'));

        $response = $client->chat()->create([
            'model' => 'gpt-4',
            'messages' => [
                ['role' => 'system', 'content' => 'You are a helpful business support AI chatbot.'],
                ['role' => 'user', 'content' => $request->prompt],
            ],
        ]);

        $reply = $response->choices[0]->message->content ?? 'No response.';

        // Save chat prompt
        ChatPrompt::create([
            'user_id' => Auth::id(),
            'prompt' => $request->prompt,
            'reply' => $reply,
        ]);

        return redirect()->route('chat.index')->withInput()->with('reply', $reply);
   
    }

    public function handle(Request $request)
{
    if (Auth::check() && !Auth::user()->subscribed('default')) {
        return redirect()->route('plans')->with('error', 'You need to subscribe to use the chatbot.');
    }

    // Rest of your chatbot logic here...
}

}
