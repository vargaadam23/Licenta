<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\HTTP\Helpers\Documente;
use Illuminate\Http\Request;
use App\Mail\DocumentMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;


class ContractVCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Formular.contract');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }
    public function genereaza(Request $request)
    {
        $data = $request->input();
        $document = new Documente($data);
        
        
        $nume=$document->creeazaContract();
        if(isset($data['trimitere'])){
            if($data['trimitere']=='email'){
                if(Auth::check()){
                    $email=Auth::user()->email;
                }else{
                    $email=$data['email'];
                }
                Mail::to($email)->send(new DocumentMail($nume));
                return redirect('documente');
            }else{
                return response()->download($nume,'document.pdf',['Content-Type: application/pdf']);
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
