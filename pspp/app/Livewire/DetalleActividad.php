<?php

namespace App\Livewire;

use App\Models\Actividad;
use App\Models\Semana;
use Livewire\Component;

class DetalleActividad extends Component
{

    public $id;
    public $actividad;
    public $semana;

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
}
