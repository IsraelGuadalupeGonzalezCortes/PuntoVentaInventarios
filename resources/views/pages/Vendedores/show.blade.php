<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mostrar Vendedor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Detalles del Vendedor</h3>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="font-bold">Nombre:</p>
                            <p>{{ $vendedor->nombre }}</p>
                        </div>
                        <div>
                            <p class="font-bold">Correo Electrónico:</p>
                            <p>{{ $vendedor->correo }}</p>
                        </div>
                        <div>
                            <p class="font-bold">Teléfono:</p>
                            <p>{{ $vendedor->telefono }}</p>
                        </div>
                    </div>
                    <div class="mt-6">
                        <a href="{{ route('vendedores.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Volver a la lista</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
