<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hora extends Model
{
    use HasFactory;

    protected $table = "horas";
    protected $primaryKey = ['codAs', 'diaH', 'horaH'];
    protected $fillable = ['codAs', 'diaH', 'horaH'];
}
