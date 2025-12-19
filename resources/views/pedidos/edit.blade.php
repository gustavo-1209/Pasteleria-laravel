@extends('layouts.app')

@section('titulo', 'Editar Pedido')

@section('contenido')
    <h1 class="mb-4">Editar Pedido</h1>

    <form action="{{ route('pedidos.update', $pedido) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Tipo de torta *</label>
            <input type="text" name="tipo_torta" class="form-control"
                   value="{{ $pedido->tipo_torta }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Porciones *</label>
            <input type="number" name="porciones" class="form-control"
                   value="{{ $pedido->porciones }}" min="1" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Decoración especial</label>
            <textarea name="decoracion" class="form-control"
                      rows="3">{{ $pedido->decoracion }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Nombre del cliente *</label>
            <input type="text" name="cliente" class="form-control"
                   value="{{ $pedido->cliente }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Teléfono *</label>
            <input type="text" name="telefono" class="form-control"
                   value="{{ $pedido->telefono }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Fecha de entrega *</label>
            <input type="date" name="fecha_entrega" class="form-control"
                   value="{{ $pedido->fecha_entrega }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Estado *</label>
            <select name="estado" class="form-select" required>
                <option value="Pendiente" {{ $pedido->estado=='Pendiente' ? 'selected' : '' }}>Pendiente</option>
                <option value="En preparación" {{ $pedido->estado=='En preparación' ? 'selected' : '' }}>En preparación</option>
                <option value="Lista" {{ $pedido->estado=='Lista' ? 'selected' : '' }}>Lista</option>
                <option value="Entregada" {{ $pedido->estado=='Entregada' ? 'selected' : '' }}>Entregada</option>
            </select>
        </div>

        <div class="d-flex gap-2">
            <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">
                Cancelar
            </a>
            <button type="submit" class="btn btn-primary">
                Actualizar
            </button>
        </div>
    </form>
@endsection
