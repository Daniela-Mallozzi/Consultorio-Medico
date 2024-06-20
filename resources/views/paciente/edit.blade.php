<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Editar paciente') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto">
                <div class="container mx-auto p-4 bg-white">
                
                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                
                    <form action="{{ route('paciente.update', $paciente->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                
                        <div class="mb-4">
                            <label for="nombre" class="block text-black">Nombre:</label>
                            <input type="text" name="nombre" id="nombre" value="{{ $paciente->nombre }}" class="w-full p-2 border border-gray-300 rounded">
                        </div>
                
                        <div class="mb-4">
                            <label for="apellido_p" class="block text-black">Apellido Paterno:</label>
                            <input type="text" name="apellido_p" id="apellido_p" value="{{ $paciente->apellido_p }}" class="w-full p-2 border border-gray-300 rounded">
                        </div>
                
                        <div class="mb-4">
                            <label for="apellido_m" class="block text-black">Apellido Materno:</label>
                            <input type="text" name="apellido_m" id="apellido_m" value="{{ $paciente->apellido_m }}" class="w-full p-2 border border-gray-300 rounded">
                        </div>
                
                        <div class="mb-4">
                            <label for="age" class="block text-black">Edad:</label>
                            <input type="text" name="age" id="age" value="{{ $paciente->age }}" class="w-full p-2 border border-gray-300 rounded">
                        </div>

                        <div class="mb-4">
                            <label for="correo" class="block text-black">Correo:</label>
                            <input type="email" name="correo" id="correo" value="{{ $paciente->correo }}" class="w-full p-2 border border-gray-300 rounded">
                        </div>
                
                        <div class="mb-4">
                            <label for="telefono" class="block text-black">Teléfono:</label>
                            <input type="text" name="telefono" id="telefono" value="{{ $paciente->telefono }}" class="w-full p-2 border border-gray-300 rounded">
                        </div>
                
                        <div class="mb-4">
                            <label for="fecha_nacimiento" class="block text-black">Fecha de Nacimiento:</label>
                            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ $paciente->fecha_nacimiento }}" class="w-full p-2 border border-gray-300 rounded">
                        </div>
                
                        <div class="mb-4">
                            <label for="genero_biologico" class="block text-black">Género:</label>
                            <select name="genero_biologico" id="genero_biologico" class="w-full p-2 border border-gray-300 rounded">
                                <option value="Masculino" {{ $paciente->genero_biologico == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                                <option value="Femenino" {{ $paciente->genero_biologico == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                            </select>
                        </div>
                        
                        <div class="mb-4">
                        <button type="submit" class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Guardar Cambios</button>
                        <button type="button" class="text-white bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Eliminar Usuario</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
