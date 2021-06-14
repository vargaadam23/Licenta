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
</style>
<div class="container documenteCtn">
    <h3 style="color:black;margin:40px 0">Alegeti tipul de document</h3>
    <div class="row justify-content-center">
        <div class="col-12 col-md-3">
            <a href="/contract" class="btn documenteBtn">Contract vanzare-cumparare</a>
        </div>
        <div class="col-12 col-md-3">
            <a href="/transcriere" class="btn documenteBtn">Transcriere</a>
        </div>
        <div class="col-12 col-md-3">
            <a href="/inmatriculare" class="btn documenteBtn">Inmatriculare</a>
        </div>
        <div class="col-12 col-md-3">
            <a href="" class="btn documenteBtn">Radiere</a>
        </div>
    </div>
</div>
@endsection