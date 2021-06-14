@extends('master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Chats</div>
                <div id="app">
                    <chat-container :user="{{Auth::id()}}"/>
                </div>


            </div>
        </div>
    </div>
</div>
</div>
@endsection