@extends('layouts/myapp')
@section('choix')
    <div class="jumbotron">
        <h1>{{$titre}}   </h1>      
    </div>

    <ol class="list-group">
    	@foreach($listeservice as $serv)
    	<li class="list-group-item">{{$serv}}</li>
    	@endforeach
    </ol>

@endsection



 