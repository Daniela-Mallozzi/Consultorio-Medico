<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Pacientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-black">
                    <thead class="text-xs text-black uppercase bg-white">
                        <tr>
                            <th scope="col" class="px-6 py-3">Nombre Paciente</th>
                            <th scope="col" class="px-6 py-3">Correo</th>
                            <th scope="col" class="px-6 py-3">Teléfono</th>
                            <th scope="col" class="px-6 py-3">Fecha Nacimiento</th>
                            <th scope="col" class="px-6 py-3">Género</th>
                            <th scope="col" class="px-6 py-3">Edad</th>
                            <th scope="col" class="px-6 py-3"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pacientes as $paciente)
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap">
                                    {{ $paciente->nombre }} {{ $paciente->apellido_p }} {{ $paciente->apellido_m }}
                                </th>
                                <td class="px-6 py-4">{{ $paciente->correo }}</td>
                                <td class="px-6 py-4">{{ $paciente->telefono }}</td>
                                <td class="px-6 py-4">{{ $paciente->fecha_nacimiento }}</td>
                                <td class="px-6 py-4">{{ $paciente->genero_biologico }}</td>
                                <td class="px-6 py-4">{{ $paciente->age }}</td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('paciente.edit', $paciente->id) }}" class="text-blue-600">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>                
                <br>

                <button onclick="window.location.href='pacientes/registrar_pacientes'" type="button" class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Registrar Nuevo Paciente</button>
                <button onclick="window.location.href='cita/agendar'" type="button" class="text-white bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Agendar Cita</button>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</x-app-layout>
