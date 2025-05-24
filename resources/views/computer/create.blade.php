@extends('layout.app')

@section('content')
<form action="{{ route('computer.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="number" class="form-label">Número</label>
        <input type="text" id="number" name="number" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="brand" class="form-label">Marca</label>
        <input type="text" id="brand" name="brand" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-outline-success mb-4">Crear</button>
</form>
@endsection