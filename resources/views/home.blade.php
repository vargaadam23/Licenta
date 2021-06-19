@extends('master')

@section('content')
<style>
    .row {
        text-align: center;
    }

    h4 {
        margin: 30px;
    }

    span.circle_icon {
        background: #fff;
        border-radius: 8em;
        -moz-border-radius: 8em;
        -webkit-border-radius: 8em;
        box-shadow: 0 0 0 4px #3D566E;
        color: #3D566E;
        display: inline-block;
        font-weight: 300;
        line-height: 50px;
        margin-bottom: 10px;
        margin-top: 20px;
        text-align: center;
        vertical-align: middle;
        width: 50px;
    }
    .va{
        vertical-align: middle;
    }
</style>
<div class="container">
    <div class="row">
        <h2 style="color:#3D566E;">Bine ați venit pe platforma Birouauto!</h2>
    </div>
    <div style="margin: 30px; border-style:solid; border-radius:30px; border-width:1px; border-color:#dbdbdb;" class="container">
        <div class="row">
            <span class="circle_icon">
                <span class="va" data-feather="file-text"></span>
            </span>

            <h4> In secțiunea Documente puteți genera contracte, dosare de transcriere și de înmatriculare pe care le veți primi prin e-mail</h4>
        </div>
        <div class="row">
            <span class="circle_icon">
                <span class="va" data-feather="info"></span></span>
            <h4> Pagina Informații cuprinde pașii necesari pentru a efectua un proces de vanzâre-cumpărare sau înscriere al vehiculului</h4>

        </div>
        <div class="row">
            <span class="circle_icon">
                <span class="va" data-feather="message-square"></span>
            </span>
            <h4> Secțiunea asigurări pune la dispoziție un chat prin care puteți să contactați un distribuitor de asigurări acreditat pentru a-i adresa întrebari sau a cere o ofertă de asigurare obligatorie</h4>
        </div>
    </div>

</div>
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>
@endsection