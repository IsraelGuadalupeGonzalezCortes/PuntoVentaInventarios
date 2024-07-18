<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-800">Lista de Clientes</h3>
                        <a href="{{ route('clientes.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Agregar Nuevo Cliente
                        </a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nombre
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Correo Electronico
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Telefono
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Direccion
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        RFC
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Razon Social
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Codigo Postal
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Regimen Fiscal
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($clientes as $cliente)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $cliente->nombre }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $cliente->correo}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $cliente->direccion }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $cliente->rfc }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $cliente->razon_social }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $cliente->codigo_postal }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $cliente->regimen_fiscal }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="{{ route('clientes.show', $cliente) }}" class="text-blue-500 hover:text-blue-700">Ver</a>
                                            <a href="{{ route('clientes.edit', $cliente) }}" class="text-blue-500 hover:text-blue-700">Editar</a>
                                            <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:text-red-700 ml-2">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
