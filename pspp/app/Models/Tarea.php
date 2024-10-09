<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Action;

class Tarea extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nombre',
        'descripcion',
        'resultado',
        'observacion',
        'active',
        'fecha_inicio',
        'fecha_final',
        'semana_id',
    ];

    public function actividad()
    {
        return $this->belongsTo(Actividad::class, 'actividad_id');
    }

    public function evidencia()
    {
        return $this->hasMany(EvidenciaTarea::class, 'tarea_id');
    }
}
