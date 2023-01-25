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
        .create-container {
            padding: 20px;
        }
    </style>

    <div class="create-container">
        <a href="/asignaturas">Ver listado de asignatura</a>
        <br>
        <h1>Nueva asignatura</h1>
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

                <label>Color:</label>
                <input type="color" name="colorAs" id="color">

                <input type="submit" value="Guardar">
            </form>
        </div>
    </div>
                 
</x-app-layout>
