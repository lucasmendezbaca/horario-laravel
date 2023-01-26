<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Hora extends Model
{
    use HasFactory;

    protected $table = "horas";
    protected $primaryKey = ['codAs', 'diaH', 'horaH'];
    protected $fillable = ['codAs', 'diaH', 'horaH'];
    public $incrementing = false;

    public function obtenerHoras()
    {
        return DB::table('horas')->leftJoin('asignaturas','horas.codAs',"=",'asignaturas.codAs')
                                 ->leftJoin('users','asignaturas.user_id','=','users.id')
                                 ->where('users.id','=',Auth::user()->id)->get();
    }

    public function obtenerHora($codAs, $diaH, $horaH)
    {
        return DB::table('horas')->leftJoin('asignaturas','horas.codAs',"=",'asignaturas.codAs')
                                 ->leftJoin('users','asignaturas.user_id','=','users.id')
                                 ->where('horas.codAs', $codAs)
                                 ->where('diaH', $diaH)
                                 ->where('users.id','=',Auth::user()->id)
                                 ->where('horaH', $horaH)->get();
    }
}
