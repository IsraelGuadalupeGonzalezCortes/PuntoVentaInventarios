<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mostrar Producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Detalles del Producto</h3>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="font-bold">Nombre:</p>
                            <p>{{ $producto->nombre }}</p>
                        </div>
                        <div>
                            <p class="font-bold">Categoría:</p>
                            <p>{{ $producto->categoria->nombre }}</p>
                        </div>
                        <div>
                            <p class="font-bold">Precio de Venta:</p>
                            <p>{{ $producto->PV }}</p>
                        </div>
                        <div>
                            <p class="font-bold">Precio de Compra:</p>
                            <p>{{ $producto->PC }}</p>
                        </div>
                        <div>
                            <p class="font-bold">Fecha de Compra:</p>
                            <p>{{ $producto->ultima_compra ?? 'No hay compras' }}</p>
                        </div>
                        <div>
                            <p class="font-bold">Color:</p>
                            <p>{{ $producto->color }}</p>
                        </div>
                        <div class="col-span-2">
                            <p class="font-bold">Descripción Corta:</p>
                            <p>{{ $producto->descripcion_corta }}</p>
                        </div>
                        <div class="col-span-2">
                            <p class="font-bold">Descripción Larga:</p>
                            <p>{{ $producto->descripcion_larga }}</p>
                        </div>
                    </div>
                    <div class="flex justify-end mt-4">
                        <a href="{{ route('productos.edit', $producto) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Editar
                        </a>
                        <form action="{{ route('productos.destroy', $producto) }}" method="POST" class="ml-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Eliminar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
