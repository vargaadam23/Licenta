@extends('master')

@section('content')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<div class="item content">
	<div class="container toparea">
		<div class="row text-center">
			<div class="col-md-4">
				<div class="col editContent">
					<span class="numberstep"></span>
					<h3 class="numbertext">Facebook</h3>
					<p>
						Puteți trimite reclamatii sau feedback prin facebook messenger pe pagina oficiala Bitouauto.ro
					</p>
				</div>
				<!-- /.col-md-4 -->
			</div>
			<!-- /.col-md-4 col -->
			<div class="col-md-4 editContent">
				<div class="col">
					<span class="numberstep"></span>
					<h3 class="numbertext">Pe site</h3>
					<p>
						După bifarea butonului captcha de mai jos, aveti posibilitatea de a trimite un mesaj prin intermediul formularului. Răspunsul îl veți primi prin e-mail dacă este cazul.
					</p>
				</div>
				<!-- /.col -->
			</div>
			<!-- /.col-md-4 col -->
			<div class="col-md-4 editContent">
				<div class="col">
					<span class="numberstep"></span>
					<h3 class="numbertext">E-Mail</h3>
					<p>
						Puteți să ne trimiteți un mesaj pe adresa de e-mail <b>feedback@birouauto.ro</b>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
@if(Auth::check())
<form style="margin-top:30px;" method="POST" action="/sendfeedback">
	@csrf
	<label for="reclamatii"> Sectiune de reclamatii si feedback</label>
	<div id="reclamatii" class="row" style="border-style: solid;border-radius:20px;border-width:1px;border-color:#e1e4e8; padding:40px;">
		<div class="col-12 col-md-6">
			@foreach($mesaje as $mesaj)
			<p style="color:black;">{{$mesaj->mesaj}}</p>
			<span>(@php if($mesaj->status==1){
				echo "Mesajul a fost marcat vazut";
			}elseif($mesaj->status==2){
				echo "A fost trimis un e-mail cu raspuns";
			}elseif($mesaj->status==3){
				echo "Problema rezolvata";
			}elseif($mesaj->status==4){
				echo "Problema nerezolvata";
			}elseif($mesaj->status==5){
				echo "Finalizat";
			}
			@endphp)</span>
			@endforeach
		</div>
		<div class="col-12 col-md-6">
			<textarea class="form-control" name="mesaj" id="mesaj" cols="30" rows="7"></textarea>
		</div>
		<div class="col-12 col-md-6">

		</div>
		
                   
		<div style="text-align: center;padding-top:30px;" class="col-12 col-md-6">
		<div class="g-recaptcha" data-sitekey="6LfXrj8bAAAAACWCLlo_ZPrIj-MUrr7Z3DJOkLih"></div>
		<button class="g-recaptcha btn btn-primary" 
                        type="submit">Submit</button>
			<span>(vom raspunde reclamatiilor prin e-mail)</span>
			@if(session('captcha'))
			<span style="color:red;">Nu ati trecut testul captcha!</span>
			{{Session::forget('captcha')}}
			@endif
		</div>
	</div>
	@endif

</form>



@endsection