<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Editar Producto</h3>

                    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-2 gap-4">
                            <div class="col-span-2 mb-4">
                                <label for="nombre" class="block font-medium text-sm text-gray-700">Nombre:</label>
                                <input type="text" id="nombre" name="nombre" value="{{ $producto->nombre }}" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                            </div>
                            <div class="col-span-2 mb-4">
                                <label for="categoria_id" class="block font-medium text-sm text-gray-700">Categoría:</label>
                                <select id="categoria_id" name="categoria_id" class="form-select mt-1 block w-full" required>
                                    @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->id }}" {{ $producto->categoria->id == $categoria->id ? 'selected' : '' }}>{{ $categoria->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="precio_venta" class="block font-medium text-sm text-gray-700">Precio de Venta:</label>
                                <input type="number" id="precio_venta" name="precio_venta" value="{{ $producto->precio_venta }}" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                            </div>
                            <div class="mb-4">
                                <label for="precio_compra" class="block font-medium text-sm text-gray-700">Precio de Compra:</label>
                                <input type="number" id="precio_compra" name="precio_compra" value="{{ $producto->precio_compra }}" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                            </div>
                            <div class="mb-4">
                                <label for="ultima_compra" class="block font-medium text-sm text-gray-700">Fecha de Compra:</label>
                                <input type="date" id="ultima_compra" name="ultima_compra" value="{{ $producto->ultima_compra }}" class="form-input rounded-md shadow-sm mt-1 block w-full">
                            </div>
                            <div class="mb-4">
                                <label for="color" class="block font-medium text-sm text-gray-700">Color:</label>
                                <input type="text" id="color" name="color" value="{{ $producto->color }}" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                            </div>
                            <div class="col-span-2 mb-4">
                                <label for="descripcion_corta" class="block font-medium text-sm text-gray-700">Descripción Corta:</label>
                                <textarea id="descripcion_corta" name="descripcion_corta" rows="3" class="form-textarea mt-1 block w-full rounded-md shadow-sm" required>{{ $producto->descripcion_corta }}</textarea>
                            </div>
                            <div class="col-span-2 mb-4">
                                <label for="descripcion_larga" class="block font-medium text-sm text-gray-700">Descripción Larga:</label>
                                <textarea id="descripcion_larga" name="descripcion_larga" rows="5" class="form-textarea mt-1 block w-full rounded-md shadow-sm" required>{{ $producto->descripcion_larga }}</textarea>
                            </div>
                        </div>

                        <div class="flex justify-end mt-4">
                            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                Guardar cambios
                            </button>
                            <a href="{{ route('productos.index') }}" class="ml-2 inline-block bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold py-2 px-4 rounded">
                                Cancelar
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
