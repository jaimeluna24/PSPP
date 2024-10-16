<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Semana extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'semana',
        'fecha_inicio',
        'fecha_fin',
    ];

    public function actividad()
    {
        return $this->hasMany(Actividad::class, 'semana_id');
    }
}
