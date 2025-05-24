@extends('layout.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Lista de Computadores</h1>

    <a href="{{ route('computer.create') }}" class="btn btn-warning btn-sm mb-4">Crear</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Número</th>
                <th>Marca</th>
                <th>Detalle</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($computers as $computer)
                <tr>
                    <td>{{ $computer->id }}</td>
                    <td>{{ $computer->number }}</td>
                    <td>{{ $computer->brand }}</td>
                    <td>
                        <a href="{{ route('computer.show', $computer->id) }}" class="btn btn-info btn-sm">Ver más</a>
                    </td>
                    <td>
                        <a href="{{ route('computer.edit', $computer->id) }}" class="btn btn-success btn-sm">Editar</a>
                    </td>
                    <td>
                        <form action="{{ route('computer.destroy', $computer->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro que deseas eliminar este computador?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="bi bi-trash-fill"></i> Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

