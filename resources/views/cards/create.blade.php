@extends('layout.app')

@section('title', 'Crear Carta')

@section('content')

    <div class="container">
        <h1>Crear Carta</h1>
        <br>
        <form action="{{ route('cards.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre de tu carta" value="{{ old('name') }}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Ejemplo: Criatura" value="{{ old('type') }}">
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">Color</label>
                <input type="text" class="form-control" id="color" name="color" placeholder="Blanco, Azul, Negro, Rojo, Verde" value="{{ old('color') }}">
            </div>
            <div class="mb-3">
                <label for="rarity" class="form-label">Rareza</label>
                <input type="text" class="form-control" id="rarity" name="rarity" placeholder="Común, Infrecuente, Rara, Mítica" value="{{ old('rarity') }}">
            </div>
            <div class="mb-3">
                <label for="mana_cost" class="form-label">Coste de Maná</label>
                <input type="text" class="form-control" id="mana_cost" name="mana_cost" value="{{ old('mana_cost') }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
            </div>
            <div class="mb-3">
                <label for="expansion" class="form-label">Expansión</label>
                <input type="text" class="form-control" id="expansion" name="expansion" value="{{ old('expansion') }}">
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <a href="{{ route('cards.index') }}" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>

@endsection
