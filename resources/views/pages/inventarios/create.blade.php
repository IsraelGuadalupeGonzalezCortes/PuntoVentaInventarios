<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Inventario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('inventarios.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label for="producto_id" class="block text-sm font-medium text-gray-700">Producto</label>
                                <select name="producto_id" id="producto_id" class="form-select mt-1 block w-full">
                                    @foreach($productos as $producto)
                                        <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="categoria_id" class="block text-sm font-medium text-gray-700">Categoría</label>
                                <select name="categoria_id" id="categoria_id" class="form-select mt-1 block w-full">
                                    @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="fecha_entrada" class="block text-sm font-medium text-gray-700">Fecha de Entrada</label>
                                <input type="date" name="fecha_entrada" id="fecha_entrada" class="form-input mt-1 block w-full" required>
                            </div>
                            <div>
                                <label for="fecha_salida" class="block text-sm font-medium text-gray-700">Fecha de Salida</label>
                                <input type="date" name="fecha_salida" id="fecha_salida" class="form-input mt-1 block w-full">
                            </div>
                            <div>
                                <label for="movimiento" class="block text-sm font-medium text-gray-700">Movimiento</label>
                                <input type="text" name="movimiento" id="movimiento" class="form-input mt-1 block w-full" required>
                            </div>
                            <div>
                                <label for="motivo" class="block text-sm font-medium text-gray-700">Motivo</label>
                                <input type="text" name="motivo" id="motivo" class="form-input mt-1 block w-full">
                            </div>
                            <div>
                                <label for="cantidad" class="block text-sm font-medium text-gray-700">Cantidad</label>
                                <input type="number" name="cantidad" id="cantidad" class="form-input mt-1 block w-full" required>
                            </div>
                        </div>
                        <div class="mt-6">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
