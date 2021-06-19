@extends('masterni')

@section('content')
<style>
.documenteBtn{
    width: 100%;
    margin: 10px 20px;
    border-style: solid;
    border-color: #3D566E;
    border-width: 3px;
    font-size: 18px;
    color: #3D566E;
    transition: 0.2s;
}
.documenteBtn:hover{
    background-color: #3D566E;
    color: white;
}
.documenteBtn:focus{
    background-color: #3D566E;
    color: white;
}
.documenteCtn{
    text-align: center;
}
.ascuns{
    opacity: 0;
    transition: 0.5s;
    height: 200px;
    text-align: center;
}
a:hover + .ascuns{
    opacity: 1;
}
</style>
<div class="container documenteCtn">
    <h3 style="color:#3D566E;margin:40px 0">Alegeți tipul de document</h3>
    <div class="row justify-content-center">
        <div class="col-12 col-md-4">
            <a href="/contract" class="btn documenteBtn">Contract vânzare-cumpărare</a>
            <div class="ascuns row">
                <p >Pentru generarea unui contract vânzare-cumpărare</p>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <a href="/transcriere" class="btn documenteBtn">Transcriere</a>
            <div class=" ascuns row">
                <p >Pentru generarea unui dosar de transcriere cu contract vânzare-cumpărare si cerere tip de înmatriculare</p>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <a href="/inmatriculare" class="btn documenteBtn">Înmatriculare</a>
            <div class="ascuns row">
                <p >Pentru generarea unui dosar de înmatriculare cu contract, cerere tip și fișă de înmatriculare</p>
            </div>
        </div>
    </div>
    <div style="height: 80px;" class="row">

    </div>

</div>
@endsection