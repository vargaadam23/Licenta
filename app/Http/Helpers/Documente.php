<?php 


namespace App\Http\Helpers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

use Illuminate\Http\Request;
use setasign\Fpdi;
use setasign\Fpdi\PdfParser;
use setasign\Tfpdf;
//set_time_limit(400);
class Pdf extends Fpdi\Tfpdf\Fpdi
{
    
}
class Documente{
    public $data=array();
    function __construct($data){
        $this->data=$data;
    }
    
    public function creeazaContract(){
        $data=$this->data;
        $fileContent = file_get_contents(asset("docs/CONTRACT2.pdf"),'rb');


        $pdf = new Pdf();
        $pdf->AddPage();
        
        $pdf->setSourceFile(PdfParser\StreamReader::createByString($fileContent));
        $template = $pdf->importPage(1);
        $pdf->useTemplate($template);
        
        //$pdf->Image('cereri/semanturi/semnatura-' . $array['cnp'] . '.png', 58.5, 241,31,9);
        $pdf->AddFont('DejaVuSansCondensed', 'B', 'DejaVuSansCondensed.ttf', true);
        $pdf->SetFont('DejaVuSansCondensed', '', 9);
        $x=129;
        $y=46.1;
        $pdf->SetXY($x,$y);
        $pdf->Write(25,$data['nume1'].' '.$data['prenume1']);

        $pdf->SetXY($x=56,$y=$y+4);// rand 2
        $pdf->Write(25,$data['country1']);//tara
        $pdf->SetXY($x+=39,$y);
        $pdf->Write(25,$data['jud1']);
        $pdf->SetXY($x+=52,$y);
        $pdf->Write(25,' ');//cod postal

        $pdf->SetXY($x=15,$y=$y+4.1);// rand 3
        $pdf->Write(25,$data['localitate1']);
        $pdf->SetXY($x+=72,$y);
        $pdf->Write(25,$data['sat1']);
        $pdf->SetXY($x+=56,$y);
        $pdf->Write(25,$data['str1']);

        $pdf->SetXY($x=16,$y=$y+4.2);// rand 4
        $pdf->Write(25,$data['nr1']);
        $pdf->SetXY($x+=16,$y);
        $pdf->Write(25,$data['bl1']);
        $pdf->SetXY($x+=17,$y);
        $pdf->Write(25,$data['sc1']);
        $pdf->SetXY($x+=14,$y);
        $pdf->Write(25,$data['et1']);
        $pdf->SetXY($x+=12,$y);
        $pdf->Write(25,$data['ap1']);
        $pdf->SetXY($x+=73,$y);
        $pdf->Write(25,$data['serie1'][0].$data['serie1'][1]);
        $pdf->SetXY($x+=12,$y);
        $pdf->Write(25,$data['serie1']);

        $pdf->SetXY($x=16,$y=$y+4.2);// rand 5
        $pdf->Write(25,$data['cnp1']);






        $x=129;
        $y=91;
        $pdf->SetXY($x,$y);
        $pdf->Write(25,$data['nume2'].' '.$data['prenume2']);

        $pdf->SetXY($x=56,$y=$y+4);// rand 2
        $pdf->Write(25,$data['country2']);
        $pdf->SetXY($x+=39,$y);
        $pdf->Write(25,$data['jud2']);
        $pdf->SetXY($x+=52,$y);
        $pdf->Write(25,' ');

        $pdf->SetXY($x=15,$y=$y+4.1);// rand 3
        $pdf->Write(25,$data['localitate2']);
        $pdf->SetXY($x+=72,$y);
        $pdf->Write(25,$data['sat2']);
        $pdf->SetXY($x+=56,$y);
        $pdf->Write(25,$data['str2']);

        $pdf->SetXY($x=16,$y=$y+4.2);// rand 4
        $pdf->Write(25,$data['nr2']);
        $pdf->SetXY($x+=16,$y);
        $pdf->Write(25,$data['bl2']);
        $pdf->SetXY($x+=17,$y);
        $pdf->Write(25,$data['sc2']);
        $pdf->SetXY($x+=14,$y);
        $pdf->Write(25,$data['et2']);
        $pdf->SetXY($x+=12,$y);
        $pdf->Write(25,$data['ap2']);
        $pdf->SetXY($x+=73,$y);
        $pdf->Write(25,$data['serie2'][0].$data['serie2'][1]);
        $pdf->SetXY($x+=12,$y);
        $pdf->Write(25,$data['serie2']);

        $pdf->SetXY($x=16,$y=$y+4.2);// rand 5
        $pdf->Write(25,$data['cnp2']);
        
        $pdf->SetXY($x=62,$y=$y+31.5);// rand 6
        $pdf->Write(25,$data['mar']);
        $pdf->SetXY($x+=63,$y);
        $pdf->Write(25,$data['tip']);

        $pdf->SetXY($x=16,$y=$y+4.2);// rand 7
        $pdf->Write(25,$data['iden']);
        $pdf->SetXY($x+=65,$y);
        $pdf->Write(25,$data['civ']);
        $pdf->SetXY($x+=50,$y);
        $pdf->Write(25,$data['cil']);




        $pdf->SetXY($x=55,$y=$y+19);// rand 8
        $pdf->Write(25,$data['pret']);
        $pdf->SetXY($x+=65,$y);
        $pdf->Write(25,'TREIZECISICINCIDEMIIEURO');

        $pdf->SetXY($x=82,$y=$y+57.5);// rand 
        $pdf->Write(25,$data['data']);
        $pdf->SetXY($x+=35,$y);
        $pdf->Write(25,$data['locul']);
        
        
        $numefisier=substr($data['nume2'],0,2).substr($data['prenume2'],0,2).'-'.substr($data['nume1'],0,2).substr($data['prenume1'],0,2).substr($data['cnp2'],-2).'-'.substr($data['cnp2'],-2).substr($data['iden'],-4);
        $pdf->Output(storage_path('contract'.$numefisier.'.pdf'), "F");
        return storage_path('contract'.$numefisier.'.pdf');
    }
    public function creeazaCerere(int $tip,int $t){ // Daca t % 10 > 0 => nr provizoriu
        $data=$this->data;
        $fileContent = file_get_contents(asset("docs/cerere_inmatriculare.pdf"),'rb');
        
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
        if($tip==1){
            $pdf->SetXY($x,$y);
        $pdf->Write(25,$data['nume1'].' '.$data['prenume1']);

        $pdf->SetXY($x=68,$y=$y+5.2);// rand 2
        $pdf->Write(25,$data['cnp1']);
        $pdf->SetXY($x=53,$y=$y+5.2);
        $pdf->Write(25,$data['localitate1']);
        $pdf->SetXY($x+=52,$y);
        $pdf->Write(25,$data['str1']);
        $pdf->SetXY($x+=56,$y);
        $pdf->Write(25,$data['nr1']);
        $pdf->SetXY($x+=24,$y);
        $pdf->Write(25,$data['bl1']);


        $pdf->SetXY($x=27,$y=$y+4.8);// rand 3
        $pdf->Write(25,$data['sc1']);
        $pdf->SetXY($x+=26,$y);
        $pdf->Write(25,$data['et1']);
        $pdf->SetXY($x+=20,$y);
        $pdf->Write(25,$data['ap1']);
        $pdf->SetXY($x+=60,$y);
        $pdf->Write(25,$data['jud1']);

        
        }else{
            $pdf->SetXY($x,$y);
            $pdf->Write(25,$data['nume2'].' '.$data['prenume2']);
    
            $pdf->SetXY($x=68,$y=$y+5.2);// rand 2
            $pdf->Write(25,$data['cnp2']);
            $pdf->SetXY($x=53,$y=$y+5.2);
            $pdf->Write(25,$data['localitate2']);
            $pdf->SetXY($x+=52,$y);
            $pdf->Write(25,$data['str2']);
            $pdf->SetXY($x+=56,$y);
            $pdf->Write(25,$data['nr2']);
            $pdf->SetXY($x+=24,$y);
            $pdf->Write(25,$data['bl2']);
    
    
            $pdf->SetXY($x=27,$y=$y+4.8);// rand 3
            $pdf->Write(25,$data['sc2']);
            $pdf->SetXY($x+=26,$y);
            $pdf->Write(25,$data['et2']);
            $pdf->SetXY($x+=20,$y);
            $pdf->Write(25,$data['ap2']);
            $pdf->SetXY($x+=60,$y);
            $pdf->Write(25,$data['jud2']);
    
            
        }
        if($t==1){
            $pdf->SetXY($x=20.5,$y=$y+9.85);// INMATRICULARE
            $pdf->Write(25,'X');
            $pdf->SetXY($x=20.5,$y=$y+(7-$t)*9.85);
        }elseif($t==2){
            $pdf->SetXY($x,$y=$y+$t*9.85);// INMATRICULARE TEMPORALA
            $pdf->Write(25,'X');
            $pdf->SetXY($x=20.5,$y=$y+(7-$t)*9.85);
        }elseif($t==3){
            $pdf->SetXY($x,$y=$y+$t*9.85);// TRANSCRIEREA TRANSMITERII
            $pdf->Write(25,'X');
            $pdf->SetXY($x=20.5,$y=$y+(7-$t)*9.85);
        }elseif($t==4){
            $pdf->SetXY($x,$y=$y+$t*9.85);// ELIBERAREA UNUI DUPLICAT
            $pdf->Write(25,'X');
            $pdf->SetXY($x=20.5,$y=$y+(7-$t)*9.85);
        }elseif($t==5){
            $pdf->SetXY($x,$y=$y+$t*9.85);// ELIBERAREA UNUI NOU CERTIFICAT
            $pdf->Write(25,'X');
            $pdf->SetXY($x=20.5,$y=$y+(7-$t)*9.85);
        }elseif($t==6){
            $pdf->SetXY($x,$y=$y+$t*9.85);// RADIEREA
            $pdf->Write(25,'X');
            $pdf->SetXY($x=20.5,$y=$y+(7-$t)*9.85);
        }elseif($t>=10){
            $pdf->SetXY($x,$y=$y+7*9.85);// AUTORIZAREA PROVIZORIE
            $pdf->Write(25,'X');
            $pdf->SetXY($x+=112.5,$y);
            $pdf->Write(25,$t);
        }
        
        $pdf->SetXY($x=69,$y=$y+5.5);//RAND 4
        $pdf->Write(25,$data['mar']);
        $pdf->SetXY($x+=60,$y);
        $pdf->Write(25,$data['tip']);

        $pdf->SetXY($x=53,$y=$y+5.2);//RAND 5
        $pdf->Write(25,$data['iden']);
        $pdf->SetXY($x+=100,$y);
        $pdf->Write(25,$data['anfb']);

        $pdf->SetXY($x=53,$y=$y+5);//RAND 6
        $pdf->Write(25,' ');// nr de inmatriculare
        $pdf->SetXY($x+=100,$y);
        $pdf->Write(25,' ');// data dobandit
        
        if($tip==1){
            $numefisier=substr($data['nume1'],0,2).substr($data['prenume1'],0,2).substr($data['cnp1'],-2).substr($data['iden'],-4);
        }else{
            $numefisier=substr($data['nume2'],0,2).substr($data['prenume2'],0,2).substr($data['cnp2'],-2).substr($data['iden'],-4);
        }
        
        $pdf->Output(storage_path('cerere'.$numefisier.'.pdf'), "F");
        return storage_path('cerere'.$numefisier.'.pdf');
    }
    public function creeazaFisa(){
        $data=$this->data;
        $fileContent = file_get_contents(asset("docs/fisa-de-inmatriculare.pdf"),'rb');


        $pdf = new Pdf();
        $pdf->AddPage();
        
        $pdf->setSourceFile(PdfParser\StreamReader::createByString($fileContent));
        $template = $pdf->importPage(1);
        $pdf->useTemplate($template);
        
        //$pdf->Image('cereri/semanturi/semnatura-' . $array['cnp'] . '.png', 58.5, 241,31,9);
        $pdf->AddFont('DejaVuSansCondensed', 'B', 'DejaVuSansCondensed.ttf', true);
        $pdf->SetFont('DejaVuSansCondensed', '', 9);
        $x=54;
        $y=16;
        $pdf->SetXY($x,$y);
        $pdf->Write(25,$data['nume1'].' '.$data['prenume1']);

        $pdf->SetXY($x=63,$y=$y+13);// rand 2
        $pdf->Write(25,'23.04.2021');
        $pdf->SetXY($x=63,$y=$y+12.7);
        $pdf->Write(25,$data['serie1'].','.$data['cnp1']);
        $pdf->SetXY($x=48,$y=$y+4.5);
        $rand1=$data['localitate1'].', '.$data['sat1']!='-'&&isset($data['sat1'])&&$data['sat1']!=' '?'SAT '.$data['sat1'].', ':''.'STR.'.$data['str1'];
        $pdf->Write(25,$rand1);
        $pdf->SetXY($x=35,$y=$y+4);
        $rand2='NR. '.$data['nr1'].', '.$data['bl1']!='-'&&isset($data['bl1'])&&$data['bl1']!=' '?'BL. '.$data['bl1'].', ':''.$data['sc1']!='-'&&isset($data['sc1'])&&$data['sc1']!=' '?'SC. '.$data['sc1'].', ':''.$data['et1']!='-'&&isset($data['et1'])&&$data['et1']!=' '?'ET. '.$data['et1'].', ':''.$data['ap1']!='-'&&isset($data['ap1'])&&$data['ap1']!=' '?'AP '.$data['ap1'].', ':''.'JUD. '.$data['jud1'];
        $pdf->Write(25,$rand2);

        $pdf->SetXY($x=68,$y=$y+98);
        $pdf->Write(25,'NEINMATRICULAT');

        $pdf->SetXY($x=45,$y=$y+53);
        $pdf->Write(25,$data['cat']);
        $pdf->SetXY($x=135,$y);
        $pdf->Write(25,$data['car']);

        $pdf->SetXY($x=45,$y=$y+4.3);
        $pdf->Write(25,$data['mar']);
        $pdf->SetXY($x=140,$y);
        $pdf->Write(25,$data['tip']);

        $pdf->SetXY($x=57,$y=$y+4.3);
        $pdf->Write(25,$data['om']);
        $pdf->SetXY($x=173,$y);
        $pdf->Write(25,$data['anfb']);

        $pdf->SetXY($x=80,$y=$y+5);
        $pdf->Write(25,$data['iden']);
        
        $pdf->SetXY($x=51,$y=$y+5.3);
        $pdf->Write(25,$data['seriemoto']);
        $pdf->SetXY($x=105,$y);
        $pdf->Write(25,$data['cil']);
        $pdf->SetXY($x=170,$y);
        $pdf->Write(25,$data['sursa']);
        
        $pdf->SetXY($x=51,$y=$y+4.3);
        $pdf->Write(25,$data['col']);

        $pdf->SetXY($x=100,$y=$y+8.6);
        $pdf->Write(25,$data['civ']);
        
        
        $numefisier=substr($data['nume1'],0,2).substr($data['prenume1'],0,2).substr($data['cnp1'],-2).substr($data['iden'],-4);
        $pdf->Output(storage_path('fisa'.$numefisier.'.pdf'), "F");
        
        return storage_path('fisa'.$numefisier.'.pdf');
    }
    
}

?>