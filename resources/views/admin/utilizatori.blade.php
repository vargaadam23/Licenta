@extends('adminmaster')
@section('content')

<div class="container">
    <div class="row">
        
        <div class="col-12">
            <table class="table">
            <thead>
            <tr><th>ID</th><th>Nume</th><th>Email</th><th>Creat</th><th>Tip</th><th>Delete</th></tr>
            </thead>
            <tbody>
            @foreach($utilizatori as $utilizator)
            <tr><td>{{$utilizator->id}}</td><td>{{$utilizator->name}}</td><td>{{$utilizator->email}}</td><td>{{$utilizator->created_at}}</td><td>{{$utilizator->tip}}</td><td><a href="/admin/utilizator/dlt/{{$utilizator->id}}">Sterge</a></td></tr>
            @endforeach
            </tbody>
            
            </table>
        </div>
    </div>
</div>
</div>
@endsection