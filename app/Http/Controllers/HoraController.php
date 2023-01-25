<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hora;
use App\Models\Asignatura;

class HoraController extends Controller
{
    protected $horas;

    public function __construct(Hora $horas)
    {
        $this->middleware('auth');
        $this->horas = $horas;
    }

    public function index()
    {
        $horas = $this->horas->obtenerHoras();
        return view('horas.lista', ['horas' => $horas]);
    }

    public function create()
    {
        $asignaturas = Asignatura::all();
        return view('horas.crear', ['asignaturas' => $asignaturas]);
    }

    public function store(Request $request)
    {
        $hora = new Hora(
            [
                'codAs' => $request->codAs,
                'diaH' => $request->diaH,
                'horaH' => $request->horaH
            ]
        );
        $hora->save();
        return redirect()->action([HoraController::class, 'index']);
    }
}
