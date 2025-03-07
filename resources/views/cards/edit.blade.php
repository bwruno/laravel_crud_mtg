@extends('layout.app')

@section('title', 'Editar Carta')

@section('content')

    <div class="container">
        <h1>Editar Carta</h1>
        <br>
        <form id="updateForm" action="{{ route('cards.update', $card->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <b>ID:</b> {{ $card->id }}
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre de tu carta" value="{{ $card->name }}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Ej: Criatura" value="{{ $card->type }}">
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">Color</label>
                <input type="text" class="form-control" id="color" name="color" placeholder="Blanco, Azul, Negro, Rojo, Verde" value="{{ $card->color }}">
            </div>
            <div class="mb-3">
                <label for="rarity" class="form-label">Rareza</label>
                <input type="text" class="form-control" id="rarity" name="rarity" placeholder="Común, Infrecuente, Rara, Mítica" value="{{ $card->rarity }}">
            </div>
            <div class="mb-3">
                <label for="mana_cost" class="form-label">Coste de Maná</label>
                <input type="text" class="form-control" id="mana_cost" name="mana_cost" value="{{ $card->mana_cost }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $card->description }}">
            </div>
            <div class="mb-3">
                <label for="expansion" class="form-label">Expansión</label>
                <input type="text" class="form-control" id="expansion" name="expansion" value="{{ $card->expansion }}">
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
            <button type="button" id="updateButton" class="btn btn-primary">Actualizar</button>
           
        </form>
        <script>
            document.getElementById('updateButton').addEventListener('click', function() {
                Swal.fire({
                    title: '¿Confirmar actualización?',
                    text: '¿Estás seguro de que deseas actualizar este registro?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Sí, actualizar',
                    cancelButtonText: 'Cancelar',
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('updateForm').submit();
                    }
                });
            });
        </script>
    </div>

@endsection
