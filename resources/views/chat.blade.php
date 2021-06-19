@extends('masterni')

@section('content')
<style>
    .row {
        margin-left: 20px;
    }
</style>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<div class="container">
    <div class="row">
        <div style="border-style:solid; border-radius:30px; border-width:1px; border-color:#dbdbdb;padding:20px;" class="col-md-4">
            <div style="text-align: center;" class="row">
                <h3>Chat asigurări</h3>
            </div>
            <div class="row">
                <ul>
                    <li>
                        <p>Prin această funcționalitate veți putea adresa întrebări unui distribuitor de asigurări acreditat</p>
                    </li>
                    <li>
                        <p>Conversația începe în momentul în care trimiteți primul mesaj către distribuitorul de asigurări</p>
                    </li>
                    <li>
                        <p>Trimiterea documentelor dvs. pentru a calcula oferta se va realiza prin e-mail la adresa <b style="color: black;">asigurari@birouauto.ro</b></p>
                    </li>
                    <li>
                        <p> <b> Încercari repetate de spam sau trimiterea mesajelor care nu au legatură cu încheierea asigurărilor poate conduce la blocarea sau ștergerea contului dvs.!</b></p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
            @if(!session('captcha')||session('captcha')=='failed')
            <form method="POST" action="/chat/captcha">
                @csrf
                <div class="g-recaptcha" data-sitekey="6LfXrj8bAAAAACWCLlo_ZPrIj-MUrr7Z3DJOkLih"></div>
                <button class="g-recaptcha btn btn-primary" type="submit">Submit</button>
                
                
            </form>
            @endif
                
            </div>
            @if(session('captcha')&&session('captcha')=='success')
            <div id="app">
                <chat-container :user="{{Auth::id()}}" />
            </div>
            @endif
            


        </div>
    </div>
</div>
</div>
</div>
@endsection