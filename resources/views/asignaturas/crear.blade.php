<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Asignaturas') }}
        </h2>
    </x-slot>
    <style>
        body {
        margin: auto;
        padding: 50px;
        }
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
        div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="/asignaturas">Ver listado de asignatura</a>
                    <br>
                    <h2>Nueva asignatura</h2>
                    <div>
                        <form action="/asignaturas/crear" method ="POST">
                            @csrf
                            <label>Codigo:</label>
                            <input type="text" name="codAs" placeholder="">
                            <label>Nombre:</label>
                            <input type="text" name="nombreAs" placeholder="">
                            <label>Nombre Corto:</label>
                            <input type="text" name="nombreCortoAs" placeholder="">
                            <label>Profesor:</label>
                            <input type="text" name="profesorAs" placeholder="">
                            <label for="color">Color:</label>
                            <input type="color" name="colorAs" id="color">
                            <input type="submit" value="Guardar">
                        </form>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
