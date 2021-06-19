<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\HTTP\Helpers\Documente;
use Error;
use Illuminate\Http\Request;

class InmatriculareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Formular.inscrieri');
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
    public function genereaza(Request $request)
    {
        $data = $request->input();
        $document = new Documente($data);
        
        
        $pdf = new \Jurosh\PDFMerge\PDFMerger;
        $pdf->addPDF($document->creeazaCerere(1,1), 'all')
            ->addPDF($document->creeazaFisa(), 'all');

        $nume=storage_path('inmatriculare'.$document->data['nume1'].' '.$document->data['cnp1'].'.pdf');
       
        // call merge, output format `file`
        $pdf->merge('file',$nume );
       
            Mail::raw('test', ['nume'=>$nume], function ($message) use ($nume){
                $message->from('documente@birouauto.ro', 'Test');
            
                $message->to(Auth::user()->email);
                $message->attach($nume);
            });
        
        
        return redirect('documente');
    }
}
