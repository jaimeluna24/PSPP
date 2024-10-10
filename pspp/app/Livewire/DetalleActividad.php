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
use Illuminate\Support\Facades\Storage;

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
    public $query = '';

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
    public $modalEditarTarea = false;
    public $modalEditarActividad = false;

    //Variables para tareas
    public $nombre;
    public $descripcion;
    public $resultado;
    public $observacion;
    public $fecha_inicio;
    public $fecha_final;
    public $evidenciaTarea;
    public $active;

    //Variabes para actividad
    public $nombreActividad;
    public $descripcionActividad;
    public $areaActividad;
    public $encargadoActividad;
    public $activeActividad;
    public $fecha_inicioActividad;
    public $fecha_finalActividad;
    public $evidenciaActividad;

    //Variables para evidencia de tareas
    public $tareaTitulo;
    public $tareaEvidencia;
    public $evidenciaSeleccionada;
    public $cantidadEvidenciaTareas;

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
        $tareas = Tarea::where('actividad_id', $this->id)->where('nombre', 'like', '%'.$this->query.'%')->orderBy('id', 'desc')->paginate(6, pageName: 'page_tarea');
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
        $this->cantidadEvidenciaTareas = $this->listaEvidenciaTarea->count();
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

    public function agregarEvidenciaTarea()
    {
        $this->validate([
            'tareaEvidencia' => 'required',
            'tareaTitulo' => 'required'
        ]);
        $imagePath = $this->tareaEvidencia->store('tareas/evidencia', 'public');
        $evidenciaTarea = new EvidenciaTarea();

        $evidenciaTarea->titulo = $this->tareaTitulo;
        $evidenciaTarea->evidencia = $imagePath;
        $evidenciaTarea->fecha = Carbon::now('America/Tegucigalpa')->format('Y-m-d');
        $evidenciaTarea->tarea_id = $this->tareaSeleccionada->id;

        // dd($evidenciaTarea);
        $evidenciaTarea->save();

        notyf()->success('Evidencia guardada exitosamente');
        $this->toDetallesTarea($this->tareaSeleccionada->id);

        $this->modalAgregarEvidenciaTarea = false;
        $this->tareaTitulo = '';
        $this->tareaEvidencia = '';
    }

    public function descargarTareaImagen($ruta)
    {
        if (Storage::disk('public')->exists($ruta['evidencia'])) {
            $path = storage_path('app/public/' . $ruta['evidencia']);

            return response()->download($path, $ruta['titulo'].'.jpg');
            notyf()->success('Descargando imagen');
        } else {
            notyf()->error('Error al descargar la imagen');
        }
    }

    public function editarTarea()
    {
        $this->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'resultado' => 'required',
            'observacion' => 'required',
            'fecha_inicio' => 'required'
        ]);

        $this->tareaSeleccionada->update([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'resultado' => $this->resultado,
            'observacion' => $this->observacion,
            'fecha_inicio' => $this->fecha_inicio,
        ]);
        notyf()->success('Tarea actualizada exitosamente');
        $this->modalEditarTarea = false;
    }

    //Funciones para atividades
    public function editarActividad()
    {
        $this->validate([
            'nombreActividad' => 'required',
            'descripcionActividad' => 'required',
            'areaActividad' => 'required',
            'encargadoActividad' => 'required',
            'fecha_inicioActividad' => 'required'
        ]);

        $this->actividad->update([
            'nombre' => $this->nombreActividad,
            'descripcion' => $this->descripcionActividad,
            'area' => $this->areaActividad,
            'encargado' => $this->encargadoActividad,
            'fecha_inicio' => $this->fecha_inicioActividad,
        ]);
        notyf()->success('Actividad actualizada exitosamente');
        $this->modalEditarActividad = false;
    }

    public function finalizarActividad()
    {
        $this->actividad->update([
            'active' => false,
            'fecha_final' => Carbon::now('America/Tegucigalpa')->format('Y-m-d')
        ]);
        notyf()->success('Actividad finalizada exitosamente');
        $this->toDetalleActividad();
    }

    public function activarActividad()
    {
        $this->actividad->update([
            'active' => true,
            'fecha_final' => null
        ]);
        notyf()->success('Actividad activada exitosamente');
    }

    public function eliminarActividad()
    {
        $this->actividad->delete();
        notyf()->warning('Actividad eliminada exitosamente');
        return redirect()->route('actividades');
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

    public function toEvidenciaTarea($id)
    {
        $this->evidenciaSeleccionada = EvidenciaTarea::find($id);
        $this->modalEvidenciaTarea = true;
    }

    public function cerrarEvidenciaTarea()
    {
        $this->modalEvidenciaTarea = false;
    }

    public function toAgregarEvidenciaActividad()
    {
        $this->modalAgregarEvidenciaActividad = true;
    }

    public function toAgregarEvidenciaTarea()
    {
        $this->modalAgregarEvidenciaTarea = true;
    }

    public function toEvidenciaTareaRetorno()
    {
        $this->modalAgregarEvidenciaTarea = false;
    }

    public function toEditarTarea($id)
    {
        $tarea = Tarea::find($id);
        $this->modalEditarTarea = true;
        $this->nombre = $tarea->nombre;
        $this->descripcion = $tarea->descripcion;
        $this->resultado = $tarea->resultado;
        $this->observacion = $tarea->observacion;
        $this->fecha_inicio = $tarea->fecha_inicio;
    }

    public function toEditarActividad()
    {
        $this->modalEditarActividad = true;
        $this->nombreActividad = $this->actividad->nombre;
        $this->descripcionActividad = $this->actividad->descripcion;
        $this->areaActividad = $this->actividad->area;
        $this->encargadoActividad = $this->actividad->encargado;
        $this->fecha_inicioActividad = $this->actividad->fecha_inicio;
    }

    public function toDetalleActividad()
    {
        $this->modalCreate = false;
        $this->modalDeleteTarea = false;
        $this->modalDeleteActividad = false;
        $this->modalFinalizarActividad = false;
        $this->modalFinalizarTarea = false;
        $this->drawerActividad = false;
        $this->drawerTarea = false;
        $this->modalEvidenciaActividad = false;
        $this->modalEvidenciaTarea = false;
        $this->modalAgregarEvidenciaActividad = false;
        $this->modalAgregarEvidenciaTarea = false;
        $this->modalEditarTarea = false;
        $this->modalEditarActividad = false;
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
