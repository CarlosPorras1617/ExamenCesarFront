<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class MostrarDetalle extends Component
{
    //datos a actualizar
    public $datosModificarDetalle = [];
    public $erroresApi = [];
    //id cliente
    public $idDetalle;
    //constructor
    public function mount($id){
        $this->idCliente = $id;
    }
    public function render()
    {
        $respuesta = Http::get('http://127.0.0.1:8000/api/clientes/'. $this->idDetalle);
        $detalle=$respuesta->json();
        if ($respuesta->successful()) {
            return view('livewire.mostrar-detalle', compact('detalle'));
        }else{
            dd('error');
        }
    }
}
