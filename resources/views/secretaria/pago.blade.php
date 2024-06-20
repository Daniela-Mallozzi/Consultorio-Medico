<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pagos a doctores') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nombre del doctor
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Especialidad
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Correo electrónico
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Télefono
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Nombre doctor
                            </th>
                            <td class="px-6 py-4">
                                Especialidad
                            </td>
                            <td class="px-6 py-4">
                                correo@ejemplo.com
                            </td>
                            <td class="px-6 py-4">
                                (834) 123-4567
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Nombre doctor
                            </th>
                            <td class="px-6 py-4">
                            Especialidad
                            </td>
                            <td class="px-6 py-4">
                                correo@ejemplo.com
                            </td>
                            <td class="px-6 py-4">
                                (834) 234-5678
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Nombre doctor
                            </th>
                            <td class="px-6 py-4">
                            Especialidad
                            </td>
                            <td class="px-6 py-4">
                            correo@ejemplo.com
                            </td>
                            <td class="px-6 py-4">
                                (834) 345-6789
                            </td>
                        </tr>
                    </tbody>
                </table><br>
                <button onclick="window.location.href='doctores/registrar_doctores'" type="button" class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Registrar pago</button>
            </div>
        </div>

    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</x-app-layout>