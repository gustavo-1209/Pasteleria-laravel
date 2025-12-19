@extends('layouts.app')

@section('titulo', 'Nuevo Pedido')

@section('contenido')
    <h1 class="mb-4">Registrar Pedido</h1>

    <form action="{{ route('pedidos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Tipo de torta *</label>
            <input type="text" name="tipo_torta" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Porciones *</label>
            <input type="number" name="porciones" class="form-control" min="1" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Decoración especial</label>
            <textarea name="decoracion" class="form-control" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Nombre del cliente *</label>
            <input type="text" name="cliente" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Teléfono *</label>
            <input type="text" name="telefono" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Fecha de entrega *</label>
            <input type="date" name="fecha_entrega" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Estado *</label>
            <select name="estado" class="form-select" required>
                <option value="">Seleccione...</option>
                <option value="Pendiente">Pendiente</option>
                <option value="En preparación">En preparación</option>
                <option value="Lista">Lista</option>
                <option value="Entregada">Entregada</option>
            </select>
        </div>

        <div class="d-flex gap-2">
            <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">
                Cancelar
            </a>
            <button type="submit" class="btn btn-primary">
                Guardar
            </button>
        </div>
    </form>
@endsection
