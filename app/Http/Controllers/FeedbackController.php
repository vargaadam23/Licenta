<?php

namespace App\Http\Controllers;
use App\Models\Feedback;
use Exception;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $users=DB::select('SELECT mesaj FROM feedback WHERE uid='.Auth::id().'');
            return view('feedback.feed',['mesaje'=>$users]);
        }else{
            return view('feedback.feed');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check()){
            $rules = [
                'mesaj' => 'required|string|min:3|max:1000'
            ];
            $validator = Validator::make($request->all(),$rules);
            if ($validator->fails()) {
                return redirect('home')
                ->withInput()
                ->withErrors($validator);
            }
            else{
                $data = $request->input();
                try{
                    $feedback = new Feedback();
                    $feedback->uid = Auth::id();
                    $feedback->email = Auth::user()->email;
                    $feedback->mesaj = $data['mesaj'];
                    $feedback->status = 0;
                    $feedback->save();
                    return redirect('home')->with('status',"Insert successfully");
                }
                catch(Exception $e){
                    return redirect('home')->with('failed',"operation failed at save");
                }
            }
        }else{
            return redirect('home')->with('failed',"operation failed at auth");
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
