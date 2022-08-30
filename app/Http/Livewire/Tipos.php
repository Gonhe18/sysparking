<?php

namespace App\Http\Livewire;

use App\Models\Tipo;
use Livewire\Component;
use Livewire\WithPagination;

class Tipos extends Component
{
    use WithPagination;

    protected $listeners = ['deleteRow' => 'destroy'];

    // Propiedades públicas
    public $descripcion,
        $selected_id,
        $search;
    public $action = 1,
        $paginacion = 5;

    public function render()
    {
        if (strlen($this->search) > 0) {
            $info = Tipo::where('descripcion', 'like', '%' . $this->search . '%')->paginate($this->paginacion);
            return view('livewire.tipos.componente', compact('info'));
        } else {
            $info = Tipo::paginate($this->paginacion);
            return view('livewire.tipos.componente', compact('info'));
        }
    }

    // Búsquedas con paginación
    public function updatingSearch(): void
    {
        $this->gotoPage(1);
    }

    // Movernos entre ventanas
    public function doAction($action)
    {
        $this->action = $action;
    }

    // Limpiar properties
    public function resetInput()
    {
        $this->descripcion = '';
        $this->selected_id = null;
        $this->action = 1;
        $this->search = '';
    }

    // Mostrar la info del registro editar
    public function edit($id)
    {
        $record = Tipo::findOrFail($id);
        $this->descripcion = $record->descripcion;
        $this->selected_id = $record->id;
        $this->action = 2;
    }

    // ABM tipos
    public function StoreOrUpdate()
    {
        // Validar descripcion del registros
        $this->validate([
            'descripcion' => 'required|min:4'
        ]);

        // Validar si el nombre del registro existe
        if ($this->selected_id > 0) { //editando
            $existe = Tipo::where('descripcion', $this->descripcion)->where('id', '<>', $this->selected_id)->select('descripcion')->get();
            if ($existe->count() > 0) {
                session()->flash('msg-error', 'Ya existe un registro con la misma descripción');
                $this->resetInput();
                return;
            }
        } else { //creando
            $existe = Tipo::where('descripcion', $this->descripcion)->select('descripcion')->get();
            if ($existe->count() > 0) {
                session()->flash('msg-error', 'Ya existe un registro con la misma descripción');
                $this->resetInput();
                return;
            }
        }
        if ($this->selected_id <= 0) {
            // creamos registros
            $record = Tipo::create([
                'descripcion' => $this->descripcion
            ]);
        } else {
            // buscamos registros
            $record = Tipo::find($this->selected_id);
            // Actualizamos regist
            $record->update([
                'descripcion' => $this->descripcion
            ]);
        }

        if ($this->selected_id)
            session()->flash('message', 'Tipo actualizado');
        else
            session()->flash('message', 'Tipo creado');

        // Limpiar campos
        $this->resetInput();
    }

    // Eliminar registro
    public function destroy($id)
    {
        if ($id) {
            $record = Tipo::find($id);
            $record->delete();
            // Limpiar campos
            $this->resetInput();
        }
    }
}