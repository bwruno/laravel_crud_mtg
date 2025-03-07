@extends('layout.app')

@section('title', 'Lista de Cartas')

@section('content')

    <div class="container">
        <h1 class="mt-3">Lista de Cartas</h1>
        <br>
        @if (session('success'))
            <div class="alert alert-success mt-2">
                {{ session('success') }}
            </div>
        @endif
        <div class="text-end">
            <a href="{{ route('cards.create') }}" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Crear</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Color</th>
                    <th>Rareza</th>
                    <th>Maná</th>
                    <th>Descripción</th>
                    <th>Expansión</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($card as $card)
                    <tr>
                        <th scope="row">{{ $card->id }}</th>
                        <td>{{ $card->name }}</td>
                        <td>{{ $card->type }}</td>
                        <td>{{ $card->color }}</td>
                        <td>{{ $card->rarity }}</td>
                        <td>{{ $card->mana_cost }}</td>
                        <td>{{ $card->description }}</td>
                        <td>{{ $card->expansion }}</td>
                        <td class="text-end">
                            <a href="{{ route('cards.show', $card->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('cards.edit', $card->id) }}" class="btn btn-success">Editar</a>
                            <!-- Botón de eliminación -->
                            <form id="deleteForm" action="{{ route('cards.destroy', $card->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')

                                <button type="button" id="deleteButton" class="btn btn-danger">Eliminar</button>
                            </form>

                            <script>
                                document.getElementById('deleteButton').addEventListener('click', function() {
                                    Swal.fire({
                                        title: '¿Estás seguro?',
                                        text: '¡Esta acción no se puede deshacer!',
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonText: 'Sí, eliminar',
                                        cancelButtonText: 'Cancelar',
                                        confirmButtonColor: '#d33',
                                        cancelButtonColor: '#3085d6',
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            document.getElementById('deleteForm').submit();
                                        }
                                    });
                                });
                            </script>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

