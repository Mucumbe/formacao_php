@extends('layouts.main')
@section('title','HDC Events')
@section('content')
    
    @if($busca!='')
    <p>
        Exibindo produto com descricao:{{ $busca }}
    </p>
    @endif
@endsection