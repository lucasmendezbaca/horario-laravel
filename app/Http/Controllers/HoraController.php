<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hora;
use App\Models\Asignatura;
use Illuminate\Support\Facades\DB;

class HoraController extends Controller
{
    protected $horas;
    protected $asignaturas;

    public function __construct(Hora $horas)
    {
        $this->horas = $horas;
        $this->asignaturas = new Asignatura();
    }

    public function index()
    {
        $horas = $this->horas->obtenerHoras();
        return view('horas.lista', ['horas' => $horas, 'asignaturas' => $this->asignaturas]);
    }

    public function create()
    {
        $asignaturaObj = new Asignatura();
        $asignaturas = $asignaturaObj->obtenerAsignaturas();
        return view('horas.crear', ['asignaturas' => $asignaturas]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'codAs' => 'required',
            'diaH' => 'required',
            'horaH' => 'required'
        ]);

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

    public function edit($codAs, $diaH, $horaH)
    {
        $horaCollection = $this->horas->obtenerHora($codAs, $diaH, $horaH);
        $hora = $horaCollection[0];
        // @dump($hora);
        // die;

        $asignaturaObj = new Asignatura();
        $asignaturas = $asignaturaObj->obtenerAsignaturas();

        return view('horas.editar', ['hora' => $hora, 'asignaturas' => $asignaturas]);
    }

    public function update(Request $request, $codAs, $diaH, $horaH)
    {
        $horaCollection = $this->horas->obtenerHora($codAs, $diaH, $horaH);
        $hora = $horaCollection;
        @dump($hora);
        die;
        
        // $hora->codAs = $request->codAs;
        // $hora->diaH = $request->diaH;
        // $hora->horaH = $request->horaH;
        // $hora->save();
        // return redirect()->action([HoraController::class, 'index']);
    }

    public function destroy($codAs, $diaH, $horaH)
    {
        DB::table('horas')->where('diaH', $diaH)->where('horaH', $horaH)->where('codAs', $codAs)->delete();
        return redirect()->action([HoraController::class, 'index']);
    }
}
