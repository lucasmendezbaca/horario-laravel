<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    protected $table = "asignaturas";
    protected $primaryKey = ['codAs'];
    protected $fillable = ['codAs', 'user_id', 'nombreAs', 'nombreCortoAs', 'profesorAs', 'colorAs'];
    protected $keyType = 'String';
    public $incrementing = false;

    public function obtenerAsignaturas()
    {
        return Asignatura::all();
    }

    public function obtenerAsignaturaPorId($id)
    {
        return Asignatura::find($id);
    }
}

