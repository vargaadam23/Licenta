<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ChatMessage;
use App\Models\ChatRoom;
use Illuminate\Support\Facades\Auth;
use App\Events\NewChatMessage;
use App\Models\Feedback;
use App\Models\Bug;

class AdminController extends Controller
{
    public function index()
    {
        return view('adminmaster');
    }
    public function chat()
    {

        return view('admin.adminchat');
    }
    public function utilizatori()
    {
        $users = User::where('id', '!=', auth()->id())->get();
        return view('admin.utilizatori', ['utilizatori' => $users]);
    }
    public function deleteutilizator($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/utilizatori');
    }


    public function feedback()
    {

        $feed = Feedback::where('uid', '!=', auth()->id())->get();
        return view('admin.feedback', ['feedback' => $feed]);
    }
    public function deletefeedback($id)
    {
        $user = Feedback::find($id);
        $user->delete();
        return redirect('admin/feedback');
    }
    public function updatefeedback($id,$status)
    {
        $feed=Feedback::find($id);
        $feed->status=$status;
        $feed->save();
        return redirect('/admin/feedback');
    }

    public function bugs()
    {

        $bugs = Bug::all();
        return view('admin.bugs', ['bugs' => $bugs]);
    }
    public function deletebug($id)
    {
        $user = Bug::find($id);
        $user->delete();
        return redirect('admin/bugs');
    }
    public function updatebug($id,$status)
    {
        $feed=Bug::find($id);
        $feed->status=$status;
        $feed->save();
        return redirect('/admin/bugs');
    }
    
    public function bugnou(Request $request)
    {
        $feed=new Bug();
       $feed->descriere=$request['descriere'];
       $feed->save();
        return redirect('/admin/bugs');
    }

    public function rooms()
    {
        $activerooms = DB::table('chat_messages')
            ->join('users', 'chat_messages.room', '=', 'users.id')
            ->select('chat_messages.room', 'users.name')
            ->distinct()
            ->get();
        return $activerooms;
    }
    public function messages(Request $request, $roomId)
    {
        return ChatMessage::where('room', $roomId)
            ->with('user')
            ->orderBy('created_at')
            ->get();
    }
    public function newMessage(Request $request, $roomId)
    {
        $newMessage = new ChatMessage;
        $newMessage->user_id = Auth::id();
        $newMessage->room = $roomId;
        $newMessage->message = $request->message;
        $newMessage->save();

        broadcast(new NewChatMessage($newMessage))->toOthers();

        return $newMessage;
    }
}
