<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Asignaturas') }}
        </h2>
    </x-slot>
    <style>
        table, td, th {
        border: 1px solid black;
        }
        table {
        border-collapse: collapse;
        width: 100%;
        }
        th {
        height: 70px;
        }
        td {
        height: 30px;
        }
        .button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2>Listado de asignaturas</h2>
                    <table>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Nombre corto</th>
                            <th>Profesor</th>
                            <th>Opciones</th>
                        </tr>
                        @foreach ($asignaturas as $asignatura)
                            <tr>
                                <td>{{ $asignatura->codAS }}</td>
                                <td>{{ $asignatura->nombreAs }}</td>
                                <td>{{ $asignatura->nombreCortoAs }}</td>
                                <td>{{ $asignatura->profesorAs }}</td>
                                <td>
                                    <a href="/asignaturas/ver/{{$asignatura->id}}">Ver</a>
                                    <a href="/asignaturas/editar/{{$asignatura->id}}">Editar</a>
                                    <a href="/asignaturas/eliminar/{{$asignatura->id}}">Eliminar</a>
                                </td>
                        </tr>
                        @endforeach
                    </table>
                    <br>
                    <a href="/asignaturas/crear">Nueva Asignatura</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
