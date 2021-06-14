@extends('master')

@section('content')
<div class="item content">
	<div class="container toparea">
		<div class="row text-center">
			<div class="col-md-4">
				<div class="col editContent">
					<span class="numberstep"><i class="fa fa-shopping-cart"></i></span>
					<h3 class="numbertext">Facebook</h3>
					<p>
						Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam quis risus eget urna mollis ornare vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
					</p>
				</div>
				<!-- /.col-md-4 -->
			</div>
			<!-- /.col-md-4 col -->
			<div class="col-md-4 editContent">
				<div class="col">
					<span class="numberstep"><i class="fa fa-gift"></i></span>
					<h3 class="numbertext">Pe site</h3>
					<p>
						Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam quis risus eget urna mollis ornare vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
					</p>
				</div>
				<!-- /.col -->
			</div>
			<!-- /.col-md-4 col -->
			<div class="col-md-4 editContent">
				<div class="col">
					<span class="numberstep"><i class="fa fa-download"></i></span>
					<h3 class="numbertext">E-Mail</h3>
					<p>
						Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam quis risus eget urna mollis ornare vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
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
			<p>{{$mesaj->mesaj}}</p>
			@endforeach
		</div>
		<div class="col-12 col-md-6">
			<textarea class="form-control" name="mesaj" id="mesaj" cols="30" rows="7"></textarea>
		</div>
		<div class="col-12 col-md-6">

		</div>
		<div style="text-align: center;padding-top:30px;" class="col-12 col-md-6"><input style="width:50%;" class="btn btn-primary" value="Trimite" type="submit">
			<span>(vom raspunde reclamatiilor prin e-mail)</span>
		</div>
	</div>
	@endif

</form>



@endsection