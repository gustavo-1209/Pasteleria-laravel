<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedidos.index', compact('pedidos'));
    }

    public function create()
    {
        return view('pedidos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipo_torta' => 'required|string|max:100',
            'porciones' => 'required|integer|min:1',
            'decoracion' => 'nullable|string',
            'cliente' => 'required|string|max:100',
            'telefono' => 'required|string|max:20',
            'fecha_entrega' => 'required|date',
            'estado' => 'required|string|max:50',
        ]);

        Pedido::create($request->all());

        return redirect()
            ->route('pedidos.index')
            ->with('success', 'Pedido registrado correctamente');
    }

    public function edit(Pedido $pedido)
    {
        return view('pedidos.edit', compact('pedido'));
    }

    public function update(Request $request, Pedido $pedido)
    {
        $request->validate([
            'tipo_torta' => 'required|string|max:100',
            'porciones' => 'required|integer|min:1',
            'decoracion' => 'nullable|string',
            'cliente' => 'required|string|max:100',
            'telefono' => 'required|string|max:20',
            'fecha_entrega' => 'required|date',
            'estado' => 'required|string|max:50',
        ]);

        $pedido->update($request->all());

        return redirect()
            ->route('pedidos.index')
            ->with('success', 'Pedido actualizado correctamente');
    }

    public function destroy(Pedido $pedido)
    {
        $pedido->update([
            'estado' => 'Cancelado'
        ]);

        return redirect()
            ->route('pedidos.index')
            ->with('success', 'Pedido cancelado correctamente');
    }
}
