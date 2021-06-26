@extends('masterni')

@section('content')
<script>

</script>
<style>
    #info-container {
        border: solid 1px #e1e4e8;
        border-radius: 20px;
        min-height: 700px;
        color: black;
        background-color: #e1e4e8;
        text-align: center;
        width: 100%;
    }

    h4 {
        color: #3D566E;
        font-weight: 700;
        
        text-transform: uppercase;
        margin-bottom: 100px;
    }

    .documenteBtn {
        width: 95%;
        margin: 10px 20px;
        border-style: solid;
        border-color: #3D566E;
        border-width: 3px;
        font-size: 18px;
        color: #3D566E;
        transition: 0.2s;
    }

    .documenteBtn:hover {
        background-color: #3D566E;
        color: white;
    }

    .documenteBtn:focus {
        background-color: #3D566E;
        color: white;
    }

    .documenteCtn {
        text-align: center;
    }

    .ascuns {
        display: none;
       
        height: 200px;
        text-align: center;
    }
</style>
<script>
    $(document).ready(function() {
        $('.doc1').click(function() {
            $('.asc1').toggle("slide");
            $('.asc2').css( "display", "none" );
            $('.asc3').css( "display", "none" );
            
        });
        $('.doc2').click(function() {
            $('.asc2').toggle("slide");
            $('.asc1').css( "display", "none" );
            $('.asc3').css( "display", "none" );
        });
        $('.doc3').click(function() {
            $('.asc3').toggle("slide");
            $('.asc2').css( "display", "none" );
            $('.asc1').css( "display", "none" );
        });
    });
</script>
<div id="info-container" class="container">
    <div class="row">
        <h4>Alegeti un proces pentru care dorți să aflați informații</h4>
    </div>


    <div style="margin-bottom:100px;" class="row justify-content-center">
        <div class="col-12 col-md-4">
            <button class="btn documenteBtn doc1">Vânzarea sau cumpărarea unui automobil</button>

        </div>
        <div class="col-12 col-md-4">
            <button class="btn documenteBtn doc2">Transcrierea dreptului de proprietate</button>

        </div>
        <div class="col-12 col-md-4">
            <button class="btn documenteBtn doc3">Înmatricularea unui automobil în România</button>

        </div>
    </div>
    <div class="row ascuns asc1">
        <p>Se completează contractul de vânzare-cumpărare. Vânzatorul întocmește acest document împreună cu cumpărătorul consemnându-se datele personale ale ambelor părți, datele de identificare ale autovehiculului, prețul, data și locul încheierii contractului. <br> Vânzătorul va viza documentul la direcția impozite și taxe locale a localității de domiciliu contractul, apoi va preda contractul cumpărătorului în 3 exemplare, care la rândul lui va viza contractul la direcția taxe și impozite locale în raza căruia își are domiciliul. <br> Viza aplicată vânzătorului reprezintă dovada că acesta nu are restanțe la taxe și impozite locale(dovada fiind certificatul fiscal), iar viza aplicată cumpărătorului reprezintă luarea în evidențele fiscale al autoturismului.</p>
    </div>
    <div class="row ascuns asc2">
        <p>Se completează contractul de vânzare-cumpărare. Vânzatorul întocmește acest document împreună cu cumpărătorul consemnându-se datele personale ale ambelor părți, datele de identificare ale autovehiculului, prețul, data și locul încheierii contractului. <br> Vânzătorul va viza documentul la direcția impozite și taxe locale a localității de domiciliu contractul, apoi va preda contractul cumpărătorului în 3 exemplare, care la rândul lui va viza contractul la direcția taxe și impozite locale în raza căruia își are domiciliul. <br> Viza aplicată vânzătorului reprezintă dovada că acesta nu are restanțe la taxe și impozite locale(dovada fiind certificatul fiscal), iar viza aplicată cumpărătorului reprezintă luarea în evidențele fiscale al autoturismului. <br> Contractul vizat de ambele părți împreuna cu cerere de înmatriculare, copie a asigurării valabile pe numele noului proprietar, documentele originale carte de identitate auto și talon, copie carte identitate auto, copie C.I. a noului proprietar, chitanță taxă certificat înmatriculare care se poate plăti pe site-ul <a href="https://www.ghiseul.ro/ghiseul/public/taxe/taxe-speciale/id/eyJpZEluc3QiOiA3MjExLCAidGlwUGVycyI6MCwgInZhbGlkYXJpIjogImZhbHNlIiwgInRpdGx1IjogIlBlcm1pc2UgYXV0by8gQ2VydGlmaWNhdGUgZGUgw65ubWF0cmljdWxhcmUvIEF1dG9yaXphyJtpZSBwcm92aXpvcmllIn0%3D">Ghiseul.ro</a>, în prealabil făcându-se programare pentru serviciul de înmatriculări pe site-ul <a href="https://www.drpciv.ro/drpciv-booking/">DRPCIV</a>. Documentele se predau către acest serviviu care consemnează transferul de proprietate în cartea de identitate auto și eliberează o dovadă înlocuitoare a certificatului de înmatriculare. <br> <b> Veți primi certificatul de înmatriculare nou prin poștă.</b></p>
    </div>
    <div class="row ascuns asc3">
        <p>Înmatricularea se realizează pentru următoarele tipuri de vehicule: noi, neînmatriculate în România sau anterior radiate. Procedura de înmatriculare cuprinde programarea la <a href="https://pro.rarom.ro/protara/programari.asp">RAR</a>  pentru obținerea cărții de identitate auto, întocmirea documentelor pentru înregistrare la direcția de impozite și taxe locale, încheierea asigurării de raspundere civilă auto, programare <a href="https://www.drpciv.ro/drpciv-booking/">DRPCIV</a>, plata <a href="https://www.ghiseul.ro/ghiseul/public/taxe/taxe-speciale/id/eyJpZEluc3QiOiA3MjExLCAidGlwUGVycyI6MCwgInZhbGlkYXJpIjogImZhbHNlIiwgInRpdGx1IjogIlBlcm1pc2UgYXV0by8gQ2VydGlmaWNhdGUgZGUgw65ubWF0cmljdWxhcmUvIEF1dG9yaXphyJtpZSBwcm92aXpvcmllIn0%3D">chitanței certificatului de înmatriculare</a>, prezentarea la ghișeu și predarea documentului. <br> în cazul în care autoturismul sau vehiculul este importat, veți avea nevoie de documentele de înmatriculare din țara de proveniență, contractul de vânzare cumpărare sau factura, documente de vânzare-cumpărare și de înamtriculare traduse, necesare la direcția taxe și impozite locale și ANAF în vederea eliberării unui certificat TVA, care atestă faptul că nu trebuie platită Taxa pe valoare adăugată pentru achiziție. <br> În cazul în care autoturismul a fost radiat temporar, se efectuează la RAR inspecția tehnică, apoi se realizează procedurile menționate anterior.</p>
    </div>
</div>
@endsection