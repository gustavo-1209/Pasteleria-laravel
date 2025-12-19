@extends('layouts.app')

@section('titulo', 'Pedidos')

@section('contenido')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Pedidos de Tortas</h1>
        <a href="{{ route('pedidos.create') }}" class="btn btn-primary">
            Nuevo Pedido
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Tipo de torta</th>
                <th>Porciones</th>
                <th>Cliente</th>
                <th>Entrega</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @forelse($pedidos as $pedido)
                <tr>
                    <td>{{ $pedido->tipo_torta }}</td>
                    <td>{{ $pedido->porciones }}</td>
                    <td>{{ $pedido->cliente }}</td>
                    <td>{{ $pedido->fecha_entrega }}</td>
                    <td>{{ $pedido->estado }}</td>
                    <td>
                        <a href="{{ route('pedidos.edit', $pedido) }}"
                           class="btn btn-sm btn-warning">
                            Editar
                        </a>

                        <form action="{{ route('pedidos.destroy', $pedido) }}"
                              method="POST"
                              class="d-inline">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-sm btn-danger"
                                    onclick="return confirm('¿Eliminar pedido?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">
                        No hay pedidos registrados
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
