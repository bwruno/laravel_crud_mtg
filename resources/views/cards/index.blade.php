@extends('layout.app')

@section('title', 'Lista de Cartas')

@section('content')

    <div class="container">
        <h1>Lista de Cartas</h1>
        @foreach($cards as $card)

        @endforeach
    </div>

@endsection
@endsection
