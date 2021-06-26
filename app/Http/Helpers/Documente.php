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
class Documente
{
    public $data = array();
    function __construct($data)
    {
        $this->data = $data;
    }

    public function creeazaContract()
    {
        $data = $this->data;
        $fileContent = file_get_contents(asset("docs/CONTRACT2.pdf"), 'rb');


        $pdf = new Pdf();
        $pdf->AddPage();

        $pdf->setSourceFile(PdfParser\StreamReader::createByString($fileContent));
        $template = $pdf->importPage(1);
        $pdf->useTemplate($template);

        //$pdf->Image('cereri/semanturi/semnatura-' . $array['cnp'] . '.png', 58.5, 241,31,9);
        $pdf->AddFont('DejaVuSansCondensed', 'B', 'DejaVuSansCondensed.ttf', true);
        $pdf->SetFont('DejaVuSansCondensed', '', 9);
        $x = 129;
        $y = 46.1;
        $pdf->SetXY($x, $y);
        if ($data['persoana1'] == 'pf') {
            $nume = $data['nume1'] . ' ' . $data['prenume1'];
            $cnp = $data['cnp1'];
        } else {
            $nume = $data['numep1'];
            $cnp = $data['seriep1'];
        }
        $pdf->Write(25, $nume);

        $pdf->SetXY($x = 56, $y = $y + 4); // rand 2
        $pdf->Write(25, $data['country1']); //tara
        $pdf->SetXY($x += 39, $y);
        $pdf->Write(25, $data['jud1']);
        $pdf->SetXY($x += 52, $y);
        $pdf->Write(25, ' '); //cod postal

        $pdf->SetXY($x = 15, $y = $y + 4.1); // rand 3
        $pdf->Write(25, $data['localitate1']);
        $pdf->SetXY($x += 72, $y);
        $pdf->Write(25, $data['sat1']);
        $pdf->SetXY($x += 56, $y);
        $pdf->Write(25, $data['str1']);

        $pdf->SetXY($x = 16, $y = $y + 4.2); // rand 4
        $pdf->Write(25, $data['nr1']);
        $pdf->SetXY($x += 16, $y);
        $pdf->Write(25, $data['bl1']);
        $pdf->SetXY($x += 17, $y);
        $pdf->Write(25, $data['sc1']);
        $pdf->SetXY($x += 14, $y);
        $pdf->Write(25, $data['et1']);
        $pdf->SetXY($x += 12, $y);
        $pdf->Write(25, $data['ap1']);
        $pdf->SetXY($x += 73, $y);
        if ($data['persoana1'] == 'pf') {
            $pdf->Write(25, $data['serie1'][0] . $data['serie1'][1]); }

            $pdf->SetXY($x += 12, $y);
            if ($data['persoana1'] == 'pf') {
                $pdf->Write(25, $data['serie1']); }
            
       
        $pdf->SetXY($x = 16, $y = $y + 4.2); // rand 5
        $pdf->Write(25, $cnp);






        $x = 129;
        $y = 91;
        $pdf->SetXY($x, $y);
        if ($data['persoana2'] == 'pf') {
            $nume2 = $data['nume2'] . ' ' . $data['prenume2'];
            $cnp2 = $data['cnp2'];
        } else {
            $nume2 = $data['numep2'];
            $cnp2 = $data['seriep2'];
        }
        $pdf->Write(25, $nume2);

        $pdf->SetXY($x = 56, $y = $y + 4); // rand 2
        $pdf->Write(25, $data['country2']);
        $pdf->SetXY($x += 39, $y);
        $pdf->Write(25, $data['jud2']);
        $pdf->SetXY($x += 52, $y);
        $pdf->Write(25, ' ');

        $pdf->SetXY($x = 15, $y = $y + 4.1); // rand 3
        $pdf->Write(25, $data['localitate2']);
        $pdf->SetXY($x += 72, $y);
        $pdf->Write(25, $data['sat2']);
        $pdf->SetXY($x += 56, $y);
        $pdf->Write(25, $data['str2']);

        $pdf->SetXY($x = 16, $y = $y + 4.2); // rand 4
        $pdf->Write(25, $data['nr2']);
        $pdf->SetXY($x += 16, $y);
        $pdf->Write(25, $data['bl2']);
        $pdf->SetXY($x += 17, $y);
        $pdf->Write(25, $data['sc2']);
        $pdf->SetXY($x += 14, $y);
        $pdf->Write(25, $data['et2']);
        $pdf->SetXY($x += 12, $y);
        $pdf->Write(25, $data['ap2']);
        $pdf->SetXY($x += 73, $y);
        
        if ($data['persoana1'] == 'pf') {
            $pdf->Write(25, $data['serie2'][0] . $data['serie2'][1]); }
        $pdf->SetXY($x += 12, $y);
        if ($data['persoana1'] == 'pf') {
            $pdf->Write(25, $data['serie2']); }
      

        $pdf->SetXY($x = 16, $y = $y + 4.2); // rand 5
        $pdf->Write(25, $cnp2);

        $pdf->SetXY($x = 62, $y = $y + 31.5); // rand 6
        $pdf->Write(25, $data['mar']);
        $pdf->SetXY($x += 63, $y);
        $pdf->Write(25, $data['tip']);

        $pdf->SetXY($x = 16, $y = $y + 4.2); // rand 7
        $pdf->Write(25, $data['iden']);
        $pdf->SetXY($x += 65, $y);
        $pdf->Write(25, $data['seriemoto']);
        $pdf->SetXY($x += 50, $y);
        $pdf->Write(25, $data['cil']);


        $pdf->SetXY($x = 105, $y = $y + 8.4); // rand 7
        $pdf->Write(25, $data['civ']);
        $pdf->SetXY($x += 45, $y);
        $pdf->Write(25, $data['anfb']);
        




        $pdf->SetXY($x = 55, $y = $y + 10.6); // rand 8
        $pdf->Write(25, $data['pret']);
        $pdf->SetXY($x += 65, $y);
        $pdf->Write(25, $this->StrLei(floatval($data['pret']), $data['mon']));

        $pdf->SetXY($x = 82, $y = $y + 57.5); // rand 
        $pdf->Write(25, $data['data']);
        $pdf->SetXY($x += 35, $y);
        $pdf->Write(25, $data['locul']);


        $numefisier = $nume . $nume2 . substr($data['iden'], -4);
        $pdf->Output(storage_path('doc/contract' . $numefisier . '.pdf'), "F");
        return storage_path('doc/contract' . $numefisier . '.pdf');
    }
    public function creeazaCerere(int $tip, int $t)
    { // Daca t % 10 > 0 => nr provizoriu
        $data = $this->data;
        $fileContent = file_get_contents(asset("docs/cerere_inmatriculare.pdf"), 'rb');

        $pdf = new Pdf();
        $pdf->AddPage();

        $pdf->setSourceFile(PdfParser\StreamReader::createByString($fileContent));
        $template = $pdf->importPage(1);
        $pdf->useTemplate($template);

        //$pdf->Image('cereri/semanturi/semnatura-' . $array['cnp'] . '.png', 58.5, 241,31,9);
        $pdf->AddFont('DejaVuSansCondensed', 'B', 'DejaVuSansCondensed.ttf', true);
        $pdf->SetFont('DejaVuSansCondensed', '', 9);
        $x = 86;
        $y = 96;
        if ($tip == 1) {
            $pdf->SetXY($x, $y);
            if ($data['persoana1'] == 'pf') {
                $nume = $data['nume1'] . ' ' . $data['prenume1'];
                $cnp = $data['cnp1'];
            } else {
                $nume = $data['numep1'];
                $cnp = $data['seriep1'];
            }
            $pdf->Write(25, $nume);

            $pdf->SetXY($x = 68, $y = $y + 5.2); // rand 2
            $pdf->Write(25, $cnp);
            $pdf->SetXY($x = 53, $y = $y + 5.2);
            $pdf->Write(25, $data['localitate1']);
            $pdf->SetXY($x += 52, $y);
            $pdf->Write(25, $data['str1']);
            $pdf->SetXY($x += 56, $y);
            $pdf->Write(25, $data['nr1']);
            $pdf->SetXY($x += 24, $y);
            $pdf->Write(25, $data['bl1']);


            $pdf->SetXY($x = 27, $y = $y + 4.8); // rand 3
            $pdf->Write(25, $data['sc1']);
            $pdf->SetXY($x += 26, $y);
            $pdf->Write(25, $data['et1']);
            $pdf->SetXY($x += 20, $y);
            $pdf->Write(25, $data['ap1']);
            $pdf->SetXY($x += 60, $y);
            $pdf->Write(25, $data['jud1']);
        } else {
            $pdf->SetXY($x, $y);
            if($data['persoana2']=='pf'){
                $nume=$data['nume2'].' '.$data['prenume2'];
                $cnp=$data['cnp2'];
            }
            else{
                $nume=$data['numep2'];
                $cnp=$data['seriep2'];
            }
            $pdf->Write(25, $nume);

            $pdf->SetXY($x = 68, $y = $y + 5.2); // rand 2
            $pdf->Write(25, $cnp);
            $pdf->SetXY($x = 53, $y = $y + 5.2);
            $pdf->Write(25, $data['localitate2']);
            $pdf->SetXY($x += 52, $y);
            $pdf->Write(25, $data['str2']);
            $pdf->SetXY($x += 56, $y);
            $pdf->Write(25, $data['nr2']);
            $pdf->SetXY($x += 24, $y);
            $pdf->Write(25, $data['bl2']);


            $pdf->SetXY($x = 27, $y = $y + 4.8); // rand 3
            $pdf->Write(25, $data['sc2']);
            $pdf->SetXY($x += 26, $y);
            $pdf->Write(25, $data['et2']);
            $pdf->SetXY($x += 20, $y);
            $pdf->Write(25, $data['ap2']);
            $pdf->SetXY($x += 60, $y);
            $pdf->Write(25, $data['jud2']);
        }
        if ($t == 1) {
            $pdf->SetXY($x = 20.5, $y = $y + 9.85); // INMATRICULARE
            $pdf->Write(25, 'X');
            $pdf->SetXY($x = 20.5, $y = $y + (7 - $t) * 9.85);
        } elseif ($t == 2) {
            $pdf->SetXY($x=20.5, $y = $y + $t * 9.85); // INMATRICULARE TEMPORALA
            $pdf->Write(25, 'X');
            $pdf->SetXY($x = 20.5, $y = $y + (7 - $t) * 9.85);
        } elseif ($t == 3) {
            $pdf->SetXY($x=20.5, $y = $y + $t * 9.85); // TRANSCRIEREA TRANSMITERII
            $pdf->Write(25, 'X');
            $pdf->SetXY($x = 20.5, $y = $y + (7 - $t) * 9.85);
        } elseif ($t == 4) {
            $pdf->SetXY($x=20.5, $y = $y + $t * 9.85); // ELIBERAREA UNUI DUPLICAT
            $pdf->Write(25, 'X');
            $pdf->SetXY($x = 20.5, $y = $y + (7 - $t) * 9.85);
        } elseif ($t == 5) {
            $pdf->SetXY($x=20.5, $y = $y + $t * 9.85); // ELIBERAREA UNUI NOU CERTIFICAT
            $pdf->Write(25, 'X');
            $pdf->SetXY($x = 20.5, $y = $y + (7 - $t) * 9.85);
        } elseif ($t == 6) {
            $pdf->SetXY($x=20.5, $y = $y + $t * 9.85); // RADIEREA
            $pdf->Write(25, 'X');
            $pdf->SetXY($x = 20.5, $y = $y + (7 - $t) * 9.85);
        } elseif ($t >= 10) {
            $pdf->SetXY($x, $y = $y + 7 * 9.85); // AUTORIZAREA PROVIZORIE
            $pdf->Write(25, 'X');
            $pdf->SetXY($x += 112.5, $y);
            $pdf->Write(25, $t);
        }

        $pdf->SetXY($x = 69, $y = $y + 5.5); //RAND 4
        $pdf->Write(25, $data['mar']);
        $pdf->SetXY($x += 60, $y);
        $pdf->Write(25, $data['tip']);

        $pdf->SetXY($x = 53, $y = $y + 5.2); //RAND 5
        $pdf->Write(25, $data['iden']);
        $pdf->SetXY($x += 100, $y);
        $pdf->Write(25, $data['anfb']);

        $pdf->SetXY($x = 53, $y = $y + 5); //RAND 6
        $pdf->Write(25, ' '); // nr de inmatriculare
        $pdf->SetXY($x += 100, $y);
        $pdf->Write(25, ' '); // data dobandit

       
            $numefisier = $nume. substr($data['iden'], -4);
        

        $pdf->Output(storage_path('doc/cerere' . $numefisier . '.pdf'), "F");
        return storage_path('doc/cerere' . $numefisier . '.pdf');
    }
    public function creeazaFisa()
    {
        $data = $this->data;
        $fileContent = file_get_contents(asset("docs/fisa-de-inmatriculare.pdf"), 'rb');


        $pdf = new Pdf();
        $pdf->AddPage();

        $pdf->setSourceFile(PdfParser\StreamReader::createByString($fileContent));
        $template = $pdf->importPage(1);
        $pdf->useTemplate($template);

        //$pdf->Image('cereri/semanturi/semnatura-' . $array['cnp'] . '.png', 58.5, 241,31,9);
        $pdf->AddFont('DejaVuSansCondensed', 'B', 'DejaVuSansCondensed.ttf', true);
        $pdf->SetFont('DejaVuSansCondensed', '', 9);
        $x = 54;
        $y = 16;
        $pdf->SetXY($x, $y);
        if($data['persoana1']=='pf'){
            $nume=$data['nume1'].' '.$data['prenume1'];
            $cnp=$data['serie1'] . ',CNP' . $data['cnp1'];
            $nastere=$this->extrageData($data['cnp1']);
        }
        else{
            $nume=$data['numep1'];
            $cnp=$data['seriep1'];
            $nastere=" ";
        }
        $pdf->Write(25, $nume);

        $pdf->SetXY($x = 63, $y = $y + 13);
         // rand 2
        $pdf->Write(25,$nastere );
        $pdf->SetXY($x = 63, $y = $y + 12.7);
        $pdf->Write(25, $cnp);
        $pdf->SetXY($x = 48, $y = $y + 4.5);
        
           
        $pdf->Write(25, $this->rand1($data));
        $pdf->SetXY($x = 35, $y = $y + 4);
        
        $pdf->Write(25, $this->rand2($data));

        $pdf->SetXY($x = 68, $y = $y + 98);
        $pdf->Write(25, 'NEINMATRICULAT');

        $pdf->SetXY($x = 45, $y = $y + 53);
        $pdf->Write(25, $data['cat']);
        $pdf->SetXY($x = 135, $y);
        $pdf->Write(25, $data['car']);

        $pdf->SetXY($x = 45, $y = $y + 4.3);
        $pdf->Write(25, $data['mar']);
        $pdf->SetXY($x = 140, $y);
        $pdf->Write(25, $data['tip']);

        $pdf->SetXY($x = 57, $y = $y + 4.3);
        $pdf->Write(25, $data['om']);
        $pdf->SetXY($x = 173, $y);
        $pdf->Write(25, $data['anfb']);

        $pdf->SetXY($x = 80, $y = $y + 5);
        $pdf->Write(25, $data['iden']);

        $pdf->SetXY($x = 51, $y = $y + 5.3);
        $pdf->Write(25, $data['seriemoto']);
        $pdf->SetXY($x = 105, $y);
        $pdf->Write(25, $data['cil']);
        $pdf->SetXY($x = 170, $y);
        $pdf->Write(25, $data['sursa']);

        $pdf->SetXY($x = 51, $y = $y + 4.3);
        $pdf->Write(25, $data['col']);

        $pdf->SetXY($x = 100, $y = $y + 8.6);
        $pdf->Write(25, $data['civ']);


        $numefisier =$nume . substr($data['iden'], -4);
        $pdf->Output(storage_path('doc/fisa' . $numefisier . '.pdf'), "F");

        return storage_path('doc/fisa' . $numefisier . '.pdf');
    }
    public function StrLei($No, $moneda, $sp = '', $pct = ',')
    {

        // numerele literal
        $na = array("", "UNU", "DOI", "TREI", "PATRU", "CINCI", "SASE", "SAPTE", "OPT", "NOUA");
        $nb = array("", "UN",  "DOUA", "TREI", "PATRU", "CINCI", "SASE", "SAPTE", "OPT", "NOUA");
        $nc = array("", "UNA", "DOUA", "TREI", "PATRU", "CINCI", "SASE", "SAPTE", "OPT", "NOUA");
        $nd = array("", "UNU", "DOUA", "TREI", "PATRU", "CINCI", "SASE", "SAPTE", "OPT", "NOUA");

        // unitati
        $ua = array("", "ZECE", "ZECI", "ZECI", "ZECI", "ZECI", "ZECI", "ZECI", "ZECI", "ZECI");
        $ub = array("", "SUTA", "SUTE", "SUTE", "SUTE", "SUTE", "SUTE", "SUTE", "SUTE", "SUTE");
        $uc = array("", "MIE", "MII");
        $ud = array("", "MILION", "MILIOANE");
        $ue = array("", "MILIARD", "MILIARDE");

        // legatura intre grupuri
        $lg1 = array("", "SPRE", "SPRE", "SPRE", "SPRE", "SPRE", "SPRE", "SPRE", "SPRE", "SPRE");
        $lg2 = array("", "", "SI",  "SI", "SI", "SI", "SI", "SI", "SI", "SI");

        // moneda
        $mon = array("", $moneda, $moneda);
        $ban = array("", " ban ", " bani ");

        //se elimina $sp din numar
        $sNo = (string) $No;
        $sNo = str_replace($sp, "", $sNo);

        //extrag partea intreaga si o completez cu zerouri la stg.
        $NrI = sprintf("%012s", (string) strtok($sNo, $pct));

        // extrag zecimalele
        $Zec = (string) strtok($pct);
        $Zec = substr($Zec . '00', 0, 2);

        // grupul 4 (miliarde)
        $Gr = substr($NrI, 0, 3);
        $n1 = (int) $NrI[0];
        $n2 = (int) $NrI[1];
        $n3 = (int) $NrI[2];
        $Rez = $nc[$n1] . $ub[$n1];
        $Rez = ($n2 == 1) ? $Rez . $nb[$n3] . $lg1[$n3] . $ua[$n2] :
            $Rez . $nc[$n2] . $ua[$n2] . $lg2[$n2] . ($Gr == "001" || $Gr == "002" ? $nb[$n3] : $nd[$n3]);
        $Rez = ($Gr == "000") ? $Rez : (($Gr == "001") ? ($Rez . $ue[1]) : ($Rez . $ue[2]));

        // grupul 3 (milioane)
        $Gr = substr($NrI, 3, 3);
        $n1 = (int) $NrI[3];
        $n2 = (int) $NrI[4];
        $n3 = (int) $NrI[5];
        $Rez = $Rez . $sp . $nc[$n1] . $ub[$n1];
        $Rez = ($n2 == 1) ? $Rez . $nb[$n3] . $lg1[$n3] . $ua[$n2] :
            $Rez . $nc[$n2] . $ua[$n2] . $lg2[$n2] . ($Gr == "001" || $Gr == "002" ? $nb[$n3] : $nd[$n3]);
        $Rez = ($Gr == "000") ? $Rez : (($Gr == "001") ? ($Rez . $ud[1]) : ($Rez . $ud[2]));

        // grupul 2 (mii)
        $Gr = substr($NrI, 6, 3);
        $n1 = (int) $NrI[6];
        $n2 = (int) $NrI[7];
        $n3 = (int) $NrI[8];
        $Rez = $Rez . $sp . $nc[$n1] . $ub[$n1];
        $Rez = ($n2 == 1) ? $Rez . $nb[$n3] . $lg1[$n3] . $ua[$n2] :
            $Rez . $nc[$n2] . $ua[$n2] . $lg2[$n2] . ($Gr == "001" || $Gr == "002" ? $nc[$n3] : $nd[$n3]);
        $Rez = ($Gr == "000") ? $Rez : (($Gr == "001") ? ($Rez . $uc[1]) : ($Rez . $uc[2]));

        // grupul 1 (unitati)
        $Gr = substr($NrI, 9, 3);
        $n1 = (int) $NrI[9];
        $n2 = (int) $NrI[10];
        $n3 = (int) $NrI[11];
        $Rez = $Rez . $sp . $nc[$n1] . $ub[$n1];
        $Rez = ($n2 == 1) ? ($Rez . $nb[$n3] . $lg1[$n3] . $ua[$n2] . $mon[2]) : ($Rez . $nc[$n2] . $ua[$n2] .
            ($n3 > 0 ? $lg2[$n2] : '') . ($NrI == "000000000001" ? ($nb[$n3] . $mon[1]) : ($na[$n3]) . $mon[2]));

        if ((int) $NrI == 0) {
            $Rez = "";
        }

        // banii
        if ((int) $Zec > 0) {
            $n2 = (int) substr($Zec, 0, 1);
            $n3 = (int) substr($Zec, 1, 1);
            $Rez .= ' si ';
            $Rez = ($n2 == 1) ? ($Rez . $nb[$n3] . $lg1[$n3] . $ua[$n2]) : ($Rez . $nc[$n2] . $ua[$n2] . $lg2[$n2] . ($Zec == "01" ? ($nb[$n3] . $ban[1]) : ($na[$n3]) . $ban[2]));
        }
        return $Rez;
    }
    public function extrageData($cnp){
        $zi=substr($cnp, -8,2);
        $luna=substr($cnp, -10, 2);
        $an=substr($cnp, -12, 2);
        $numeric=intval($an);
        if($numeric>=20&&$numeric<=99){
            $an='19'.$an;
        }elseif($numeric<20){
            $an='20'.$an;
        }
        return $zi.'.'.$luna.'.'.$an;
    }
    public function areValoare($valoare){
        if($valoare!= '-' && isset($valoare) && $valoare != ' ' &&$valoare != ''){
            return true;
        }
        return false;
    }
    public function rand1($data){
        if($this->areValoare($data['sat1'])){
            $data['sat1']=', SAT '.$data['sat1'];
        }
        if($this->areValoare($data['str1'])){
            $data['str1']=', STR.'.$data['str1'];
        }
        return $data['localitate1'].$data['sat1'].$data['str1'];
    }
    public function rand2($data){
        if($this->areValoare($data['bl1'])){
            $data['bl1']=', BL.'.$data['bl1'];
        }
        if($this->areValoare($data['sc1'])){
            $data['sc1']=', SC.'.$data['sc1'];
        }
        if($this->areValoare($data['et1'])){
            $data['et1']=', ET.'.$data['et1'];
        }
        if($this->areValoare($data['ap1'])){
            $data['ap1']=', AP.'.$data['ap1'];
        }
        return 'NR. '.$data['nr1'].$data['bl1'].$data['sc1'].$data['et1'].$data['ap1']. ', JUD. ' . $data['jud1'];
    }
}
