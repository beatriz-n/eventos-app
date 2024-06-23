@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

        <h1>Ola!</h1>
        <img width="400" src="/img/arvore_esquina.jpg" alt="">
        @if(10 > 5)
        <h3>condição é true</h3>
        @endif
        <h3>condição é false</h3>
        <hr>
        <h3>{{$nome}}</h3>
        <hr>
        @if($nome == 'Beatriz')
        <h3>Olá Beatriz</h3>
        @endif
        @if($nome != 'Beatriz')
        <h3>Voce não é a Beatriz</h3>
        @endif
        <hr>
        <h3>voce é a {{$nome}} e tem {{$idade}} anos</h3>
        <hr>
        @for($i = 0; $i < count($arr); $i++)
            <h3>{{$arr[$i]}}</h3>
            
            @if($arr[$i] == 2)
            <br>
                <h3>O numero do array é 2</h3>
                <br>
            @endif
        @endfor
        <hr>
        @php
        $name = 'Bea';
        echo $name;
        @endphp

        {{-- Comentário --}}

        <hr>
        <h3>Arrays de nomes:</h3>
        <br>
        @foreach($nomes as $item)
            <h3>{{$loop->index}}</h3>
            <h3>{{$item}}</h3>
        @endforeach
@endsection