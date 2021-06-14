<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatMessage;
use App\Models\ChatRoom;
use Illuminate\Support\Facades\Auth;
use App\Events\NewChatMessage;

class ChatController extends Controller
{
    public function rooms(Request $request){
        return ChatRoom::all();
    }
    public function messages (Request $request){
        return ChatMessage::where('room', Auth::id())
        ->with('user')
        ->orderBy('created_at')
        ->get();
    }
    public function newMessage(Request $request){
        $newMessage = new ChatMessage;
        $newMessage->user_id=Auth::id();
        $newMessage->room=Auth::id();
        $newMessage->message=$request->message;
        $newMessage->save();
        
        broadcast(new NewChatMessage($newMessage))->toOthers();

        return $newMessage;
    }

}
