@extends('layout.app')



@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Actualizar Computador</h1>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('computer.update', $computer->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="number" class="form-label">Número</label>
                    <input 
                        type="text" 
                        name="number" 
                        id="number" 
                        value="{{ old('number', $computer->number) }}" 
                        placeholder="Ej: 1234"
                        class="form-control"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="brand" class="form-label">Marca</label>
                    <input 
                        type="text" 
                        name="brand" 
                        id="brand" 
                        value="{{ old('brand', $computer->brand) }}" 
                        placeholder="Ej: HP"
                        class="form-control"
                        required
                    >
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i> Actualizar computador
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
