<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalle del Proveedor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">Información del Proveedor</h3>
                    <div class="grid grid-cols-1 gap-6">
                        <div>
                            <p class="font-bold">Nombre:</p>
                            <p>{{ $proveedore->nombre }}</p>
                        </div>
                        <div>
                            <p class="font-bold">Nombre de Contacto:</p>
                            <p>{{ $proveedore->nombre_contacto }}</p>
                        </div>
                        <div>
                            <p class="font-bold">Correo:</p>
                            <p>{{ $proveedore->correo }}</p>
                        </div>
                        <div>
                            <p class="font-bold">Teléfono:</p>
                            <p>{{ $proveedore->telefono }}</p>
                        </div>
                    </div>
                    <div class="flex justify-end mt-4">
                        <a href="{{ route('proveedores.edit', $proveedore) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Editar
                        </a>
                        <form action="{{ route('proveedores.destroy', $proveedore) }}" method="POST" class="ml-2">
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
