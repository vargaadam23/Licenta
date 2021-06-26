<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\HTTP\Helpers\Documente;
use Error;
use Illuminate\Http\Request;
use App\Mail\DocumentMail;
use Illuminate\Support\Facades\Storage;


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
        $pdf->addPDF($document->creeazaCerere(1, 1), 'all')
            ->addPDF($document->creeazaFisa(), 'all');
        if ($data['persoana1'] == 'pf') {
            $nume = storage_path('doc/inmatriculare' . $document->data['nume1'] . '-' . $document->data['cnp1'] . '.pdf');
        } else {
            $nume = storage_path('doc/inmatriculare' . $document->data['numep1'] . '.pdf');
        }


        // call merge, output format `file`
        $pdf->merge('file', $nume);
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
}
