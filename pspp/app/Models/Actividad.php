<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Actividad extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nombre',
        'descripcion',
        'area',
        'encargado',
        'avatar',
        'active',
        'fecha_inicio',
        'fecha_final',
        'semana_id',
    ];

    public function semana()
    {
        return $this->belongsTo(Semana::class, 'semana_id');
    }

    public function evidencia()
    {
        return $this->hasMany(EvidenciaActividad::class, 'actividad_id');
    }

    public function tarea()
    {
        return $this->hasMany(Tarea::class, 'actividad_id');
    }

}
