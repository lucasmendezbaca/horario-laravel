<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hora;
use App\Models\Asignatura;

class HorarioController extends Controller
{
    protected $horas;

    public function __construct(Hora $horas)
    {
        $this->horas = $horas;
    }

    public function index()
    {
        $diasSemana = [
            0 => 'Lunes',
            1 => 'Martes',
            2 => 'Miércoles',
            3 => 'Jueves',
            4 => 'Viernes'
        ];
        $horasDia = [
            1 => '08:15 - 09:15',
            2 => '09:15 - 10:15',
            3 => '10:15 - 11:15',
            4 => '11:45 - 12:45',
            5 => '12:45 - 13:45',
            6 => '13:45 - 14:45'
        ];
        $horas = $this->horas->obtenerHoras();
        return view('dashboard', ['horas' => $horas, 'diasSemana' => $diasSemana, 'horasDia' => $horasDia]);
    }
}
