@extends('adminmaster')

@section('content')

<div class="container">
    <div class="row">
        
        <div class="col-12">
            <div class="panel panel-default">
                <h3>Listă de chat-uri active</h3>
                <div id="app">
                    <admin-chat-container :user="{{Auth::id()}}" />
                </div>


            </div>
        </div>
    </div>
</div>
</div>
@endsection