<x-app-layout>
    <style>
        table, td, th {
        border: 1px solid black;
        padding: 0px;
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
        text-align: center;
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <h2>Horario</h2>
                <table>
                    <tr>
                        <th>Horas</th>
                        <th>Lunes</th>
                        <th>Martes</th>
                        <th>Miércoles</th>
                        <th>Jueves</th>
                        <th>Viernes</th>
                    </tr>
                @for ($i = 1; $i < 7; $i++)
                    <tr>
                        <td>{{ $horasDia[$i] }}</td>
                        @for ($j = 0; $j < 5; $j++)
                            <td style="position:relative">
                                @foreach ($horas as $hora)
                                    @if ($hora->diaH == $diasSemana[$j] && $hora->horaH == $i)
                                        <p style="position:absolute; top:0; width:100%; height:100%; background-color: {{ $asignaturas->obtenerAsignaturaPorId($hora->codAs)->colorAs }}">{{ $asignaturas->obtenerAsignaturaPorId($hora->codAs)->nombreCortoAs }}</p>
                                    @endif
                                @endforeach
                            </td>
                        @endfor
                    </tr>
                @endfor
                </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
