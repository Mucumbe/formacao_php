
@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus eventos</h1>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Participantes</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($events as $event)
    <tr>
        <td scropt=row>{{$loop->index+1}}</td>
        <td><a href="/events/{{$event->id}}">{{$event->title}}</a></td>
        <td>0</td>
        <td><a href="#">Editar</a><a href="#">Deletar</a></td>
    </tr>
    @endforeach
</tbody>
</table>

<div class="col-md-10 offset-md-1 dashboard-title-container">
    @if(count($events)>0)
    
    @else
        <p>Você ainda nao tem eventos, <a href="/events/create">criar evento</a></p>
    @endif
</div>

@endsection