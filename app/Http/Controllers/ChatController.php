<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatMessage;
use App\Models\ChatRoom;
use Illuminate\Support\Facades\Auth;
use App\Events\NewChatMessage;
use Illuminate\Support\Facades\Http;

class ChatController extends Controller
{
    public function index(Request $request)
    {
        $secret = '6LfXrj8bAAAAAO8LaU4lW7GIpil936Vm17uLSavs';
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $secret,
            'response' => $request['g-recaptcha-response'],
        ]);
        echo $response;
        $response=json_decode($response,true);
        if($response['success']==true){
            return redirect('/chat')->with('captcha','success');
        }else{
            return redirect('/chat')->with('captcha','failed');
        }
    }
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
