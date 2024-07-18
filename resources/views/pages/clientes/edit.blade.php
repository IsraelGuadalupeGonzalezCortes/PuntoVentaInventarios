<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('clientes.update', $cliente) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-input mt-1 block w-full" value="{{ old('nombre', $cliente->nombre) }}" required>
                            </div>
                            <div>
                                <label for="correo" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                                <input type="email" name="correo" id="correo" class="form-input mt-1 block w-full" value="{{ old('correo', $cliente->correo) }}" required>
                            </div>
                            <div>
                                <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono</label>
                                <input type="text" name="telefono" id="telefono" class="form-input mt-1 block w-full" value="{{ old('telefono', $cliente->telefono) }}" required>
                            </div>
                            <div>
                                <label for="direccion" class="block text-sm font-medium text-gray-700">Dirección</label>
                                <input type="text" name="direccion" id="direccion" class="form-input mt-1 block w-full" value="{{ old('direccion', $cliente->direccion) }}" required>
                            </div>
                            <div>
                                <label for="rfc" class="block text-sm font-medium text-gray-700">RFC</label>
                                <input type="text" name="rfc" id="rfc" class="form-input mt-1 block w-full" value="{{ old('rfc', $cliente->rfc) }}" required>
                            </div>
                            <div>
                                <label for="razon_social" class="block text-sm font-medium text-gray-700">Razón Social</label>
                                <input type="text" name="razon_social" id="razon_social" class="form-input mt-1 block w-full" value="{{ old('razon_social', $cliente->razon_social) }}" required>
                            </div>
                            <div>
                                <label for="codigo_postal" class="block text-sm font-medium text-gray-700">Código Postal</label>
                                <input type="text" name="codigo_postal" id="codigo_postal" class="form-input mt-1 block w-full" value="{{ old('codigo_postal', $cliente->codigo_postal) }}" required>
                            </div>
                            <div>
                                <label for="regimen_fiscal" class="block text-sm font-medium text-gray-700">Régimen Fiscal</label>
                                <input type="text" name="regimen_fiscal" id="regimen_fiscal" class="form-input mt-1 block w-full" value="{{ old('regimen_fiscal', $cliente->regimen_fiscal) }}" required>
                            </div>                       
                         </div>
                        <div class="mt-6">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
