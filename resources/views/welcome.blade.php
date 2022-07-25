
@extends('layouts.main')
@section('title','HDC Events')
@section('content')
            <h1>Alguma coisa</h1>
            @if(10>15)
                <p>A condição é true</p>   
            @endif

            <p>{{$nome}}</p>
            @if($nome=="Junior")
                <p>O nome é {{$nome}}, tem {{$idade}} anos de idade e a sua profissao é {{$profissao}}</p>
            @elseif($nome=="Mucumbe")
                <p>O nome é {{$nome}}, tem {{$idade}} anos de idade e a sua profissao é {{$profissao}}</p>
            @else
                <p>O nome não é Junior Nem Mucumbe</p>
            @endif

            @for($i = 0; $i<count($arr);$i++)
                <p>{{$arr[$i]}} - {{$i}}</p>
            @endfor

            @foreach($nomes as $nome)
                <p>{{$nome}}</p>
            @endforeach

@endsection
 