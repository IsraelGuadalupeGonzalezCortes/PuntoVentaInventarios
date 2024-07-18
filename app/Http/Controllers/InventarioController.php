<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function index()
    {
        $inventarios = Inventario::with('producto', 'categoria')->get();
        return view('pages.inventarios.index', compact('inventarios'));
    }

    public function create()
    {
        $productos = \App\Models\Producto::all();
        $categorias = \App\Models\Categoria::all();
        return view('pages.inventarios.create', compact('productos', 'categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'categoria_id' => 'required|exists:categorias,id',
            'fecha_entrada' => 'required|date',
            'fecha_salida' => 'nullable|date',
            'movimiento' => 'required|string',
            'motivo' => 'nullable|string',
            'cantidad' => 'required|integer',
        ]);

        Inventario::create($request->all());

        return redirect()->route('inventarios.index')->with('success', 'Inventario creado exitosamente.');
    }

    public function show(Inventario $inventario)
    {
        return view('pages.inventarios.show', compact('inventario'));
    }

    public function edit(Inventario $inventario)
    {
        $productos = \App\Models\Producto::all();
        $categorias = \App\Models\Categoria::all();
        return view('pages.inventarios.edit', compact('inventario', 'productos', 'categorias'));
    }

    public function update(Request $request, Inventario $inventario)
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'categoria_id' => 'required|exists:categorias,id',
            'fecha_entrada' => 'required|date',
            'fecha_salida' => 'nullable|date',
            'movimiento' => 'required|string',
            'motivo' => 'nullable|string',
            'cantidad' => 'required|integer',
        ]);

        $inventario->update($request->all());

        return redirect()->route('inventarios.index')->with('success', 'Inventario actualizado exitosamente.');
    }

    public function destroy(Inventario $inventario)
    {
        $inventario->delete();
        return redirect()->route('inventarios.index')->with('success', 'Inventario eliminado exitosamente.');
    }
}
