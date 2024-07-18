<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Compra;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        $compras = Compra::all();

        foreach ($productos as $producto) {
            $compra = $compras->where('producto_id', $producto->id)->last();
            $producto->ultima_compra = $compra ? $compra->fecha_compra : 'No hay compras';
        }      
        
        return view('pages.productos.index', [
            'productos' => $productos
        ]);
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('pages.productos.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'categoria_id' => 'required|exists:categorias,id',
            'precio_venta' => 'required|numeric',
            'precio_compra' => 'required|numeric',
            'ultima_compra' => 'nullable|date',
            'color' => 'nullable|string|max:50',
            'descripcion_corta' => 'nullable|string|max:5',
            'descripcion_larga' => 'nullable|string|max:255',
        ]);

        Producto::create($request->all());

        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
    }

    public function show(Producto $producto)
    {
        $categorias = Categoria::all();
        return view('pages.productos.edit', compact('producto', 'categorias'));
    }

    public function edit(Producto $producto)
    {
        $categorias = Categoria::all();
        return view('pages.productos.edit', compact('producto', 'categorias'));
    }

    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'categoria_id' => 'required|exists:categorias,id',
            'precio_venta' => 'required|numeric',
            'precio_compra' => 'required|numeric',
            'ultima_compra' => 'nullable|date',
            'color' => 'nullable|string|max:50',
            'descripcion_corta' => 'nullable|string|max:5',
            'descripcion_larga' => 'nullable|string|max:255',
        ]);

        $producto->update($request->all());

        return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente.');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente.');
    }
}
