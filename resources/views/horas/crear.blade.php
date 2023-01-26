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
                        <form action="/horas/crear" method ="POST">
                            @csrf
                            <label for="codAs">Asignatura</label>
                            <select name="codAs" id="codAs">
                                @foreach ($asignaturas as $asignatura)
                                    <option value="{{ $asignatura->codAs }}">{{ $asignatura->nombreAs }}</option>
                                @endforeach
                            </select>
                            <label for="diaH">Día</label>
                            <select name="diaH" id="diaH">
                                <option value="Lunes">Lunes</option>
                                <option value="Martes">Martes</option>
                                <option value="Miércoles">Miércoles</option>
                                <option value="Jueves">Jueves</option>
                                <option value="Viernes">Viernes</option>
                            </select>
                            <label for="horaH">Hora</label>
                            <select name="horaH" id="horaH">
                                <option value="1">08:15 - 09:15</option>
                                <option value="2">09:15 - 10:15</option>
                                <option value="3">10:15 - 11:15</option>
                                <option value="4">11:45 - 12:45</option>
                                <option value="5">12:45 - 13:45</option>
                                <option value="6">13:45 - 14:45</option>
                            </select>

                            <input type="submit" value="Guardar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
