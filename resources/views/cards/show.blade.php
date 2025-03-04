@extends('layout.app')

@section('title', 'Mostrar Carta')

@section('content')

    <div class="container">
        <h1>Mostrar Carta</h1>
        <br>
        <div class="mb-3">
            <b>ID:</b> {{ $card->id }}
        </div>
        <div class="mb-3">
            <b>Nombre:</b> {{ $card->name }}
        </div>
        <div class="mb-3">
            <b>Tipo:</b> {{ $card->type }}
        </div>
        <div class="mb-3">
            <b>Color:</b> {{ $card->color }}
        </div>
        <div class="mb-3">
            <b>Rareza:</b> {{ $card->rarity }}
        </div>
        <div class="mb-3">
            <b>Costo de maná:</b> {{ $card->mana_cost }}
        </div>
        <div class="mb-3">
            <b>Descripción:</b> {{ $card->description }}
        </div>
        <div class="mb-3">
            <b>Expansión:</b> {{ $card->expansion }}
        </div>
        <!-- <div class="mb-3">
            <b>Precio:</b> {{ $card->price }}
        </div> -->
        <a href="{{ route('cards.index') }}" class="btn btn-secondary">Volver</a>
    </div>

@endsection
