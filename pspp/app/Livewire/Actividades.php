<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Actividad;
use App\Models\Semana;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Actividades extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $nombre;
    public $descripcion;
    public $area;
    public $encargado;
    public $active;
    public $fecha_inicio;
    public $fecha_final;
    public $semana_id;
    public $fecha;
    public $avatar;

    public $modalCreate = false;

    public $query ='';

    public function render()
    {
        $actividades = Actividad::where('nombre', 'like', '%'.$this->query.'%')->orderBy('id', 'desc')->paginate(6, pageName: 'page_actividad');
        return view('livewire.actividades', ['actividades' => $actividades]);
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
        $this->fecha = '';
    }

    public function toActividades()
    {
        $this->modalCreate = false;
        $this->resetInputs();
    }

    public function create()
    {
        if($this->validate()){


            $semana = Semana::where('fecha_inicio', '<=', $this->fecha_inicio)
                            ->where('fecha_fin', '>=', $this->fecha_inicio)->first();

            // dd($semana);
            $actividad = new Actividad();

            $actividad->nombre = $this->nombre;
            $actividad->descripcion = $this->descripcion;
            $actividad->area = $this->area;
            $actividad->encargado = $this->encargado;
            $actividad->active = true;
            $actividad->fecha_inicio = $this->fecha_inicio;
            $actividad->semana_id = $semana->id;

            // dd($this->avatar);
            // if(!empty($this->avatar)){
            //     $imagePath = $this->avatar->store('actividad/avatars', 'public');
            //     $actividad->avatar = $imagePath;
            // }



            $actividad->save();
            $this->resetPage(pageName: 'page_actividad');
            notyf()->success('Actividad creada exitosamente');
            $this->toActividades();
        }else{
            notyf()->error('Ha ocurrido un error al crear la actividad');
        }
    }

    public function toDetalles($id)
    {
        $this->emit('idActividad', $id);
    }



}
