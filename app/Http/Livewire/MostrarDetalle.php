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
        $this->idDetalle = $id;
    }
    public function render()
    {
        $respuesta = Http::get('http://127.0.0.1:8000/api/detalles/'. $this->idDetalle);
        $detalle=$respuesta->json();
        if ($respuesta->successful()) {
            return view('livewire.mostrar-detalle', compact('detalle'));
        }else{
            dd($respuesta);
        }
    }

    public function actualizarDetalle(){
        $respuesta = Http::withHeaders(['Accept'=>'Application/json'])->put('http://127.0.0.1:8000/api/detalles/'. $this->idDetalle, $this->datosModificarDetalle);
        if ($respuesta->successful()) {
            return redirect('/detalles');
        }else{
            $this->erroresApi = $respuesta->json();
        }
    }
}
