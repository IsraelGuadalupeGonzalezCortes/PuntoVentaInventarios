<?php

namespace App\Http\Controllers;

use App\Models\Categoria; // Importar el modelo Categoria
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    // Método para mostrar la lista de categorías
    public function index()
    {
        $categorias = Categoria::all();
        return view('pages.categoria.index', compact('categorias'));
    }

    // Método para mostrar el formulario de creación de categoría
    public function create()
    {
        return view('pages.categoria.create');
    }

    // Método para almacenar una nueva categoría
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        Categoria::create($request->all());

        return redirect()->route('categorias.index')->with('success', 'Categoría creada exitosamente.');
    }

    // Método para mostrar una categoría específica
    public function show(Categoria $categoria)
    {
        return view('pages.categoria.show', compact('categoria'));
    }

    // Método para mostrar el formulario de edición de categoría
    public function edit(Categoria $categoria)
    {
        return view('pages.categoria.edit', compact('categoria'));
    }

    // Método para actualizar una categoría existente
    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $categoria->update($request->all());

        return redirect()->route('categorias.index')->with('success', 'Categoría actualizada exitosamente.');
    }

    // Método para eliminar una categoría
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();

        return redirect()->route('categorias.index')->with('success', 'Categoría eliminada exitosamente.');
    }
}
