@extends('adminmaster')
@section('content')

<div class="container">
    
    <form method="POST" class="row"  action="/admin/bugs/nou">
        @csrf
        <div class="col-6"><label for="descriere">Descriere</label>
        <textarea name="descriere" class="form-control" id="descriere" cols="30" rows="10"></textarea></div>
        <div class="col-4"> <input style="margin-top:50px;width:100px;" type="submit" class="btn btn-secondary" value="Trimite"></div>
       
    </form>
    
    <div class="row">
    
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descriere</th>
                        
                        <th>Creat</th>
                        
                        <th>Status</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bugs as $bug)
                    <tr>
                        <td>{{$bug->id}}</td>
                        <td>{{$bug->descriere}}</td>
                        
                        <td>{{$bug->created_at}}</td>
                        
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton{{$bug->id}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Status:{{$bug->status}}
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton{{$bug->id}}">
                                    <a class="dropdown-item" href="/admin/bugs/up/{{$bug->id}}/1">1.Raportat</a>
                                    <a class="dropdown-item" href="/admin/bugs/up/{{$bug->id}}/2">2.In curs de corectare</a>
                                    <a class="dropdown-item" href="/admin/bugs/up/{{$bug->id}}/3">3.Corectat</a>
                                    <a class="dropdown-item" href="/admin/bugs/up/{{$bug->id}}/4">4.Nu poate fi corectat</a>
                                    
                                </div>
                            </div>

                        </td>
                        <td><a href="/admin/bugs/dlt/{{$bug->id}}">Sterge</a></td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
</div>
@endsection