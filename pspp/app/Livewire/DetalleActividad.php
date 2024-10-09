<?php

namespace App\Livewire;

use App\Models\Actividad;
use App\Models\EvidenciaTarea;
use App\Models\Semana;
use Livewire\Component;
use App\Models\Tarea;
use Carbon\Carbon;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class DetalleActividad extends Component
{
    use WithPagination;
    use WithFileUploads;


    //Variables generales para mostrar datos de la actividad
    public $id;
    public $actividad;
    public $semana;
    public $detalleTarea = false;
    public $tareaSeleccionada;
    public $listaEvidenciaTarea;
    public $listaEvidenciaActividad;

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

    public function rules()
    {
        return [
            'nombre' => 'required',
            'descripcion' => 'required',
            'fecha_inicio' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El campo es requerido',
            'descripcion.required' => 'El campo es requerido',
            'fecha_inicio.required' => 'El campo es requerido',
        ];
    }


    public function mount($id)
    {
        $this->id = $id;
        $this->actividad = Actividad::find($id);
        $this->semana = Semana::find($this->actividad->semana_id);
    }

    public function render()
    {
        $tareas = Tarea::where('actividad_id', $this->id)->orderBy('id', 'desc')->paginate(6, pageName: 'page_tarea');
        return view('livewire.detalle-actividad', ['tareas' => $tareas]);
    }

    //Funciones para tareas
    public function create()
    {
        $this->validate();
        $tarea = new Tarea();

        $tarea->nombre = $this->nombre;
        $tarea->descripcion = $this->descripcion;
        if(!empty($this->observacion)){
            $tarea->observacion = $this->observacion;
        }else{
            $tarea->observacion = 'Sin observación';
        }
        $tarea->fecha_inicio = $this->fecha_inicio;
        $tarea->active = true;
        $tarea->actividad_id = $this->id;

        $tarea->save();
        $this->resetPage(pageName: 'page_tarea');
        notyf()->success('Tarea creada exitosamente');
        $this->toDetalleActividad();
    }

    public function toDetallesTarea($id)
    {
        $this->tareaSeleccionada = Tarea::find($id);
        $this->detalleTarea = true;
        $this->listaEvidenciaTarea = EvidenciaTarea::where('tarea_id', $id)->get();
    }

    public function activarTarea()
    {
        $this->tareaSeleccionada->update([
            'active' => true,
            'fecha_final' => null
        ]);
        notyf()->success('Tarea activada exitosamente');
    }

    public function finalizarTarea()
    {
        $this->tareaSeleccionada->update([
            'active' => false,
            'fecha_final' => Carbon::now('America/Tegucigalpa')->format('Y-m-d')
        ]);
        notyf()->success('Tarea finalizada exitosamente');
        $this->toDetalleActividad();
    }

    public function eliminarTarea()
    {
        $this->tareaSeleccionada->delete();
        notyf()->warning('Tarea eliminada exitosamente');
        $this->toDetalleActividad();
    }







    //Funciones para trabajar con modales
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
        if(!empty($this->tareaSeleccionada->resultado)){
            $this->modalFinalizarTarea = true;
        }else{
            notyf()->error('No pudes finalizar la tarea sin ingresar resultados');
        }
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
        $this->resetInputs();
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
