<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asignatura;
use Illuminate\Support\Facades\Auth;

class AsignaturaController extends Controller
{
    protected $asignaturas;

    public function __construct(Asignatura $asignaturas)
    {
        $this->middleware('auth');
        $this->asignaturas = $asignaturas;
    }

    public function index()
    {
        $asignaturas = $this->asignaturas->obtenerAsignaturas();
        return view('asignaturas.lista', ['asignaturas' => $asignaturas]);
    }

    public function create()
    {
        return view('asignaturas.crear');
    }

    public function store(Request $request)
    {
        $asignatura = new Asignatura(
            [
                'codAs' => $request->codAs,
                'user_id' => Auth::user()->id,
                'nombreAs' => $request->nombreAs,
                'nombreCortoAs' => $request->nombreCortoAs,
                'profesorAs' => $request->profesorAs,
                'colorAs' => $request->colorAs
            ]
        );
        $asignatura->save();
        return redirect()->action([AsignaturaController::class, 'index']);
    }

    public function show($id)
    {
        $asignatura = $this->asignaturas->obtenerAsignaturaPorId($id);
        return view('asignatura.ver', ['asignatura' => $asignatura]);
    }

    public function edit($id)
    {
        $asignatura = $this->asignaturas->obtenerAsignaturaPorId($id);
        return view('asignaturas.editar', ['asignatura' => $asignatura]);
    }

    public function update(Request $request, $id)
    {
        $asignatura = Asignatura::find($id);
        $asignatura->fill($request->all());
        $asignatura->save();
        return redirect()->action([AsignaturaController::class, 'index']);
    }

    public function destroy($id)
    {
        $asignatura = Asignatura::find($id);
        $asignatura->delete();
        return redirect()->action([AsignaturaController::class, 'index']);
    }
}
