<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Asignatura extends Model
{
    use HasFactory;

    protected $table = "asignaturas";
    protected $primaryKey = 'codAs';
    protected $fillable = ['codAs', 'user_id', 'nombreAs', 'nombreCortoAs', 'profesorAs', 'colorAs'];
    protected $keyType = 'String';
    public $incrementing = false;

    public function obtenerAsignaturas()
    {
        return Asignatura::where('user_id', Auth::user()->id)->get();
    }

    public function obtenerAsignaturaPorId($id)
    {
        return Asignatura::find($id);
    }
}

