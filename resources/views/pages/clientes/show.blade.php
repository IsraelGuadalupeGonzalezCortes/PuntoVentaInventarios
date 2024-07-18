<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mostrar Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Detalles del Cliente</h3>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="font-bold">Nombre:</p>
                            <p>{{ $cliente->nombre }}</p>
                        </div>
                        <div>
                            <p class="font-bold">Correo Electronico:</p>
                            <p>{{ $cliente->correo }}</p>
                        </div>
                        <div>
                            <p class="font-bold">Telefono:</p>
                            <p>{{ $cliente->telefono }}</p>
                        </div>
                        <div>
                            <p class="font-bold">Direccion:</p>
                            <p>{{ $cliente->direccion }}</p>
                        </div>
                        <div>
                            <p class="font-bold">RFC:</p>
                            <p>{{ $cliente->rfc }}</p>
                        </div>
                        <div>
                            <p class="font-bold">Razon Social:</p>
                            <p>{{ $cliente->razon_social }}</p>
                        </div>
                        <div class="col-span-2">
                            <p class="font-bold">Codigo `Postal:</p>
                            <p>{{ $cliente->codigo_postal }}</p>
                        </div>
                        <div class="col-span-2">
                            <p class="font-bold">Regimen Fiscal:</p>
                            <p>{{ $cliente->regimen_fiscal }}</p>
                        </div>
                    </div>
                    <div class="flex justify-end mt-4">
                        <a href="{{ route('clientes.edit', $cliente) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Editar
                        </a>
                        <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" class="ml-2">
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
