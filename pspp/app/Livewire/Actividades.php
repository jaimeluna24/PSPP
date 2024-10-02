<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Actividad;
use App\Models\Semana;
use Carbon\Carbon;

class Actividades extends Component
{
    public $nombre;
    public $descripcion;
    public $area;
    public $encargado;
    public $active;
    public $fecha_inicio;
    public $fecha_final;
    public $semana_id;
    public $actividades;

    public $avatar;

    public $modalCreate = false;

    public $query ='';

    public function mount()
    {
        $this->actividades = Actividad::all();
    }

    public function render()
    {
        return view('livewire.actividades');
    }

    public function rules()
    {
        return [
            'nombre' => 'required',
            'descripcion' => 'required',
            'area' => 'required',
            'encargado' => 'required',
            'fecha_inicio' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El campo es requerido',
            'descripcion.required' => 'El campo es requerido',
            'area.required' => 'El campo es requerido',
            'encargado.required' => 'El campo es requerido',
            'fecha_inicio.required' => 'El campo es requerido',
        ];
    }

    public function toCreate()
    {
        $this->modalCreate = true;
    }

    public function resetInputs()
    {
        $this->nombre = '';
        $this->descripcion = '';
        $this->area = '';
        $this->encargado = '';
        $this->active = '';
        $this->fecha_inicio = '';
        $this->avatar = '';
    }

    public function toActividades()
    {
        $this->modalCreate = false;
        $this->resetInputs();
    }

    public function create()
    {
        if($this->validate()){
            $fecha = Carbon::parse($this->fecha);

            $semana = Semana::where('fecha_inicio', '<=', $fecha)
                            ->where('fecha_fin', '>=', $fecha)->first();
            $actividad = new Actividad();

            $actividad->nombre = $this->nombre;
            $actividad->descripcion = $this->descripcion;
            $actividad->area = $this->area;
            $actividad->encargado = $this->encargado;
            $actividad->active = $this->active;
            $actividad->fecha_inicio = $this->fecha_inicio;
            $actividad->semana_id = $semana->id;

            $actividad->save();
            notyf()->success('Actividad creada exitosamente');
        }else{
            notyf()->error('Ha ocurrido un error al crear la actividad');
        }
    }



}
