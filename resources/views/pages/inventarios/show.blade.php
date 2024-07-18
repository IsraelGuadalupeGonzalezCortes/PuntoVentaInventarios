<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalle de Inventario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">Información del Inventario</h3>
                    <div class="grid grid-cols-1 gap-6">
                        <div>
                            <strong>Producto:</strong> {{ $inventario->producto->nombre }}
                        </div>
                        <div>
                            <strong>Categoría:</strong> {{ $inventario->categoria->nombre }}
                        </div>
                        <div>
                            <strong>Fecha de Entrada:</strong> {{ $inventario->fecha_entrada }}
                        </div>
                        <div>
                            <strong>Fecha de Salida:</strong> {{ $inventario->fecha_salida ?? 'N/A' }}
                        </div>
                        <div>
                            <strong>Movimiento:</strong> {{ $inventario->movimiento }}
                        </div>
                        <div>
                            <strong>Motivo:</strong> {{ $inventario->motivo ?? 'N/A' }}
                        </div>
                        <div>
                            <strong>Cantidad:</strong> {{ $inventario->cantidad }}
                        </div>
                    </div>
                    <div class="mt-6">
                        <a href="{{ route('inventarios.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
