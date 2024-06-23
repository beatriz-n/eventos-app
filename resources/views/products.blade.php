@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <h1>Ola! Tela de produtos</h1>
        @if($busca != '')
            <p>O usuario esta buscando por: {{$busca}}</p>
        @endif
        <img width="400" src="/img/arvore_esquina.jpg" alt="">
@endsection

