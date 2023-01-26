<x-app-layout>
    <style>
        input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }
        input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }
        input[type=submit]:hover {
        background-color: #45a049;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <form action="/horas/editar" method ="POST">
                            @csrf
                            {{ method_field('PUT') }}
                            <label for="codAs">Asignatura</label>
                            <select name="codAs" id="codAs">
                                @foreach ($asignaturas as $asignatura)
                                    @if ($asignatura->codAs == $hora->codAs)
                                        <option value="{{ $asignatura->codAs }}" selected>{{ $asignatura->nombreAs }}</option>
                                    @else
                                        <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreAs }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <label for="diaH">Día</label>
                            <select name="diaH" id="diaH">
                                @if ($hora->diaH == "Lunes")
                                    <option value="Lunes" selected>Lunes</option>
                                    <option value="Martes">Martes</option>
                                    <option value="Miércoles">Miércoles</option>
                                    <option value="Jueves">Jueves</option>
                                    <option value="Viernes">Viernes</option>
                                @elseif ($hora->diaH == "Martes")
                                    <option value="Lunes">Lunes</option>
                                    <option value="Martes" selected>Martes</option>
                                    <option value="Miércoles">Miércoles</option>
                                    <option value="Jueves">Jueves</option>
                                    <option value="Viernes">Viernes</option>
                                @elseif ($hora->diaH == "Miércoles")
                                    <option value="Lunes">Lunes</option>
                                    <option value="Martes">Martes</option>
                                    <option value="Miércoles" selected>Miércoles</option>
                                    <option value="Jueves">Jueves</option>
                                    <option value="Viernes">Viernes</option>
                                @elseif ($hora->diaH == "Jueves")
                                    <option value="Lunes">Lunes</option>
                                    <option value="Martes">Martes</option>
                                    <option value="Miércoles">Miércoles</option>
                                    <option value="Jueves" selected>Jueves</option>
                                    <option value="Viernes">Viernes</option>
                                @elseif ($hora->diaH == "Viernes")
                                    <option value="Lunes">Lunes</option>
                                    <option value="Martes">Martes</option>
                                    <option value="Miércoles">Miércoles</option>
                                    <option value="Jueves">Jueves</option>
                                    <option value="Viernes" selected>Viernes</option>
                                @endif
                            </select>
                            <label for="horaH">Hora</label>
                            <select name="horaH" id="horaH">
                                @if ($hora->horaH == 1)
                                    <option value="1" selected>08:15 - 09:15</option>
                                    <option value="2">09:15 - 10:15</option>
                                    <option value="3">10:15 - 11:15</option>
                                    <option value="4">11:45 - 12:45</option>
                                    <option value="5">12:45 - 13:45</option>
                                    <option value="6">13:45 - 14:45</option>
                                @elseif ($hora->horaH == 2)
                                    <option value="1">08:15 - 09:15</option>
                                    <option value="2" selected>09:15 - 10:15</option>
                                    <option value="3">10:15 - 11:15</option>
                                    <option value="4">11:45 - 12:45</option>
                                    <option value="5">12:45 - 13:45</option>
                                    <option value="6">13:45 - 14:45</option>
                                @elseif ($hora->horaH == 3)
                                    <option value="1">08:15 - 09:15</option>
                                    <option value="2">09:15 - 10:15</option>
                                    <option value="3" selected>10:15 - 11:15</option>
                                    <option value="4">11:45 - 12:45</option>
                                    <option value="5">12:45 - 13:45</option>
                                    <option value="6">13:45 - 14:45</option>
                                @elseif ($hora->horaH == 4)
                                    <option value="1">08:15 - 09:15</option>
                                    <option value="2">09:15 - 10:15</option>
                                    <option value="3">10:15 - 11:15</option>
                                    <option value="4" selected>11:45 - 12:45</option>
                                    <option value="5">12:45 - 13:45</option>
                                    <option value="6">13:45 - 14:45</option>
                                @elseif ($hora->horaH == 5)
                                    <option value="1">08:15 - 09:15</option>
                                    <option value="2">09:15 - 10:15</option>
                                    <option value="3">10:15 - 11:15</option>
                                    <option value="4">11:45 - 12:45</option>
                                    <option value="5" selected>12:45 - 13:45</option>
                                    <option value="6">13:45 - 14:45</option>
                                @elseif ($hora->horaH == 6)
                                    <option value="1">08:15 - 09:15</option>
                                    <option value="2">09:15 - 10:15</option>
                                    <option value="3">10:15 - 11:15</option>
                                    <option value="4">11:45 - 12:45</option>
                                    <option value="5">12:45 - 13:45</option>
                                    <option value="6" selected>13:45 - 14:45</option>
                                @endif
                            </select>

                            <input type="submit" value="Guardar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
