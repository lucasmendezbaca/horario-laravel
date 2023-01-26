<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Horas') }}
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
                    <h2>Listado de horas</h2>
                    <table>
                        <tr>
                            <th>Día</th>
                            <th>Hora</th>
                            <th>Asignatura</th>
                            <th>Opciones</th>
                        </tr>
                        @foreach ($horas as $hora)
                            <tr>
                                <td>{{ $hora->diaH }}</td>
                                <td>
                                    @if ($hora->horaH == 1)
                                        08:15 - 09:15
                                    @elseif ($hora->horaH == 2)
                                        09:15 - 10:15
                                    @elseif ($hora->horaH == 3)
                                        10:15 - 11:15
                                    @elseif ($hora->horaH == 4)
                                        11:45 - 12:45
                                    @elseif ($hora->horaH == 5)
                                        12:45 - 13:45
                                    @elseif ($hora->horaH == 6)
                                        13:45 - 14:45
                                    @endif
                                </td>
                                <td>{{ $asignaturas->obtenerAsignaturaPorId($hora->codAs)->nombreAs }}</td>
                                <td>
                                    <a href="/horas/editar/{{$hora->codAs}}/{{$hora->diaH}}/{{$hora->horaH}}">Editar</a>
                                    <a href="/horas/eliminar/{{$hora->codAs}}/{{$hora->diaH}}/{{$hora->horaH}}">Eliminar</a>
                                </td>
                        </tr>
                        @endforeach
                    </table>
                    <br>
                    <a href="/horas/crear">Nueva hora</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
