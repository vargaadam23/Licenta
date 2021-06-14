<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\ChatMessage;
use App\Models\ChatRoom;
use Illuminate\Support\Facades\Auth;
use App\Events\NewChatMessage;

class AdminController extends Controller
{
    public function index()
    {
        return view('adminmaster');
    }
    public function chat(){
        
        return view('admin.adminchat');
    }

    public function rooms(){
        $activerooms=DB::table('chat_messages')
            ->join('users','chat_messages.room','=','users.id')
            ->select('chat_messages.room','users.name')
            ->distinct()
            ->get();
            return $activerooms;
    }
    public function messages (Request $request, $roomId){
        return ChatMessage::where('room', $roomId)
        ->with('user')
        ->orderBy('created_at')
        ->get();
    }
    public function newMessage(Request $request, $roomId){
        $newMessage = new ChatMessage;
        $newMessage->user_id=Auth::id();
        $newMessage->room=$roomId;
        $newMessage->message=$request->message;
        $newMessage->save();
        
        broadcast(new NewChatMessage($newMessage))->toOthers();

        return $newMessage;
    }
}
