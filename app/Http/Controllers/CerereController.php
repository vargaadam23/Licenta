<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use setasign\Fpdi;
use setasign\Fpdi\PdfParser;
use setasign\Tfpdf;
set_time_limit(400);
class Pdf extends Fpdi\Tfpdf\Fpdi
{
    /**
     * "Remembers" the template id of the imported page
     */
    
}

class CerereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function completeaza(){//Request $request
        $fileContent = file_get_contents(asset("docs/cerere_inmatriculare.pdf"),'rb');
// ...

        $pdf = new Pdf();
        $pdf->AddPage();
        
        $pdf->setSourceFile(PdfParser\StreamReader::createByString($fileContent));
        $template = $pdf->importPage(1);
        $pdf->useTemplate($template);
        
        //$pdf->Image('cereri/semanturi/semnatura-' . $array['cnp'] . '.png', 58.5, 241,31,9);
        $pdf->AddFont('DejaVuSansCondensed', 'B', 'DejaVuSansCondensed.ttf', true);
        $pdf->SetFont('DejaVuSansCondensed', '', 9);
        $x=86;
        $y=96;
        $pdf->SetXY($x,$y);
        $pdf->Write(25,'Varga Adama');

        $pdf->SetXY($x=68,$y=$y+5.2);// rand 2
        $pdf->Write(25,'5000323055064');
        $pdf->SetXY($x=53,$y=$y+5.2);
        $pdf->Write(25,'Valea lui Mihai');
        $pdf->SetXY($x+=52,$y);
        $pdf->Write(25,'Szent-Gyorgyi Albert');
        $pdf->SetXY($x+=56,$y);
        $pdf->Write(25,'213412');
        $pdf->SetXY($x+=24,$y);
        $pdf->Write(25,'T1234');


        $pdf->SetXY($x=27,$y=$y+4.8);// rand 3
        $pdf->Write(25,'B2C2A2');
        $pdf->SetXY($x+=26,$y);
        $pdf->Write(25,'45');
        $pdf->SetXY($x+=20,$y);
        $pdf->Write(25,'1123');
        $pdf->SetXY($x+=60,$y);
        $pdf->Write(25,'BIHOR');

        $pdf->SetXY($x=20.5,$y=$y+9.85);// INMATRICULARE
        $pdf->Write(25,'X');
        $pdf->SetXY($x,$y=$y+9.85);// INMATRICULARE TEMPORALA
        $pdf->Write(25,'X');
        $pdf->SetXY($x,$y=$y+9.85);// TRANSCRIEREA TRANSMITERII
        $pdf->Write(25,'X');
        $pdf->SetXY($x,$y=$y+9.85);// ELIBERAREA UNUI DUPLICAT
        $pdf->Write(25,'X');
        $pdf->SetXY($x,$y=$y+9.85);// ELIBERAREA UNUI NOU CERTIFICAT
        $pdf->Write(25,'X');
        $pdf->SetXY($x,$y=$y+9.85);// RADIEREA
        $pdf->Write(25,'X');
        $pdf->SetXY($x,$y=$y+9.85);// AUTORIZAREA PROVIZORIE
        $pdf->Write(25,'X');
        $pdf->SetXY($x+=112.5,$y);
        $pdf->Write(25,'90');

        
        $pdf->SetXY($x=69,$y=$y+5.5);//RAND 4
        $pdf->Write(25,'VOLKSWAGEN');
        $pdf->SetXY($x+=60,$y);
        $pdf->Write(25,'PASSAT');

        $pdf->SetXY($x=53,$y=$y+5.2);//RAND 5
        $pdf->Write(25,'WVWZZZ0DH123456');
        $pdf->SetXY($x+=100,$y);
        $pdf->Write(25,'2007');

        $pdf->SetXY($x=53,$y=$y+5);//RAND 6
        $pdf->Write(25,'BH15TSG');
        $pdf->SetXY($x+=100,$y);
        $pdf->Write(25,'23/03/2021');
        
        
        
        $pdf->Output(storage_path('vargacerere.pdf'), "F");
    }
}
