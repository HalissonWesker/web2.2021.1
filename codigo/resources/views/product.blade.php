@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

    @if($busca != '')
    
        <p>Exibindo produto: {{ $busca }}</p>

    @else
        <p>Não foi informado nenhum produto</p>
    @endif



@endsection