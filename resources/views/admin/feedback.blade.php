@extends('adminmaster')
@section('content')

<div class="container">
    <div class="row">

        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>IDUtilizator</th>
                        <th>Email</th>
                        <th>Creat</th>
                        <th>Mesaj</th>
                        <th>Status</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($feedback as $feed)
                    <tr>
                        <td>{{$feed->id}}</td>
                        <td>{{$feed->uid}}</td>
                        <td>{{$feed->email}}</td>
                        <td>{{$feed->created_at}}</td>
                        <td>{{$feed->mesaj}}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton{{$feed->id}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Status:{{$feed->status}}
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton{{$feed->id}}">
                                    <a class="dropdown-item" href="/admin/feedback/up/{{$feed->id}}/0">0.Nevazut</a>
                                    <a class="dropdown-item" href="/admin/feedback/up/{{$feed->id}}/1">1.Vazut</a>
                                    <a class="dropdown-item" href="/admin/feedback/up/{{$feed->id}}/2">2.E-mail trimis</a>
                                    <a class="dropdown-item" href="/admin/feedback/up/{{$feed->id}}/3">3.Problema Rezolvata</a>
                                    <a class="dropdown-item" href="/admin/feedback/up/{{$feed->id}}/4">4.Problema Nerezolvata</a>
                                    <a class="dropdown-item" href="/admin/feedback/up/{{$feed->id}}/5">5.Finalizat</a>
                                </div>
                            </div>

                        </td>
                        <td><a href="/admin/feedback/dlt/{{$feed->id}}">Sterge</a></td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
</div>
@endsection