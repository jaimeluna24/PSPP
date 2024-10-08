<?php

namespace App\Livewire;

use App\Models\Actividad;
use App\Models\Semana;
use Livewire\Component;

class DetalleActividad extends Component
{

    //Variables generales para mostrar datos de la actividad
    public $id;
    public $actividad;
    public $semana;

    //Variables para modales
    public $modalCreate = false;
    public $modalDeleteActividad = false;
    public $modalDeleteTarea = false;
    public $modalFinalizarActividad = false;
    public $modalFinalizarTarea = false;
    public $drawerActividad = false;
    public $drawerTarea = false;
    public $modalEvidenciaActividad = false;
    public $modalEvidenciaTarea = false;
    public $modalAgregarEvidenciaTarea = false;
    public $modalAgregarEvidenciaActividad = false;

    //Variables para crear tareas
    public $nombre;
    public $descripcion;
    public $resultado;
    public $observacion;
    public $fecha_inicio;
    public $fecha_final;
    public $evidenciaTarea;
    public $active;

    //Variabes para editar actividad
    public $nombreActividad;
    public $descripcionActividad;
    public $areaActividad;
    public $encargadoActividad;
    public $activeActividad;
    public $fecha_inicioActividad;
    public $fecha_finalActividad;
    public $evidenciaActividad;



    public function mount($id)
    {
        $this->id = $id;
        $this->actividad = Actividad::find($id);
        $this->semana = Semana::find($this->actividad->semana_id);

    }

    public function render()
    {
        return view('livewire.detalle-actividad');
    }







    //Funciones para abrir trabajar con modales
    public function toCreate()
    {
        $this->modalCreate = true;
    }

    public function toDeleteActividad()
    {
        $this->modalDeleteActividad = true;
    }

    public function toDeleteTarea()
    {
        $this->modalDeleteTarea = true;
    }

    public function toFinalizarActividad()
    {
        $this->modalFinalizarActividad = true;
    }

    public function toFinalizarTarea()
    {
        $this->modalFinalizarTarea = true;
    }

    public function toDrawerActividad()
    {
        $this->drawerActividad = true;
    }

    public function toDrawerTarea()
    {
        $this->drawerTarea = true;
    }

    public function toEvidenciaActividad()
    {
        $this->modalEvidenciaActividad = true;
    }

    public function toEvidenciaTarea()
    {
        $this->modalEvidenciaTarea = true;
    }

    public function toAgregarEvidenciaActividad()
    {
        $this->modalAgregarEvidenciaActividad = true;
    }

    public function toAgregarEvidenciaTarea()
    {
        $this->modalAgregarEvidenciaTarea = true;
    }

    public function toDetalleActividad()
    {
        $this->modalCreate = false;
        $this->modalDeleteTarea = false;
        $this->modalFinalizarActividad = false;
        $this->modalFinalizarTarea = false;
        $this->drawerActividad = false;
        $this->drawerTarea = false;
        $this->modalEvidenciaActividad = false;
        $this->modalEvidenciaTarea = false;
        $this->modalAgregarEvidenciaActividad = false;
        $this->modalAgregarEvidenciaTarea = false;
    }

    // Función para limpiar los campos
    public function resetInputs()
    {
        //Actividad
        $this->nombreActividad = '';
        $this->descripcionActividad = '';
        $this->areaActividad = '';
        $this->encargadoActividad = '';
        $this->activeActividad = '';
        $this->fecha_inicioActividad = '';
        $this->fecha_finalActividad = '';
        $this->evidenciaActividad = '';

        // Tarea
    	$this->nombre = '';
    	$this->descripcion = '';
    	$this->resultado = '';
    	$this->observacion = '';
    	$this->active = '';
        $this->fecha_inicio = '';
        $this->fecha_final = '';
        $this->evidenciaTarea = '';
    }


}
