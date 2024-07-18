<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agregar Nuevo Producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('productos.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre:</label>
                            <input type="text" name="nombre" id="nombre" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                        </div>
                        <div class="mb-4">
                            <label for="categoria_id" class="block text-sm font-medium text-gray-700">Categoría:</label>
                            <select name="categoria_id" id="categoria_id" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                                @foreach($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="precio_venta" class="block text-sm font-medium text-gray-700">Precio de Venta:</label>
                            <input type="number" step="0.01" name="precio_venta" id="precio_venta" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                        </div>
                        <div class="mb-4">
                            <label for="precio_compra" class="block text-sm font-medium text-gray-700">Precio de Compra:</label>
                            <input type="number" step="0.01" name="precio_compra" id="precio_compra" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                        </div>
                        <div class="mb-4">
                            <label for="ultima_compra" class="block text-sm font-medium text-gray-700">Fecha de Compra:</label>
                            <input type="date" name="ultima_compra" id="ultima_compra" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="mb-4">
                            <label for="color" class="block text-sm font-medium text-gray-700">Color:</label>
                            <input type="text" name="color" id="color" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="mb-4">
                            <label for="descripcion_corta" class="block text-sm font-medium text-gray-700">Descripción Corta:</label>
                            <input type="text" name="descripcion_corta" id="descripcion_corta" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="mb-4">
                            <label for="descripcion_larga" class="block text-sm font-medium text-gray-700">Descripción Larga:</label>
                            <textarea name="descripcion_larga" id="descripcion_larga" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                Guardar Producto
                            </button>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
