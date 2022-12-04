<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Detalles extends Component
{
    public $idDetalle;
    public $datosCrearDetalle = [];
    public $erroresApi = [];
    public function render()
    {
        $respuesta = Http::get('http://127.0.0.1:8000/api/detalles');
        $respuesta2 = Http::get('http://127.0.0.1:8000/api/facturas');
        $detalles = $respuesta->json();
        $facturasID = $respuesta2->json();
        return view('livewire.detalles', compact('detalles', 'facturasID'));
    }
    public function crearDetalle()
    {
        //mandar peticion POST
        $respuesta = Http::withHeaders(['Accept' => 'Application/json'])->post('http://127.0.0.1:8000/api/detalles', $this->datosCrearDetalle);
        if ($respuesta->successful()) {
            return redirect('/detalles');
        } else {
            $this->erroresApi = $respuesta->json();
        }
    }

    public function eliminarDetalle($id){
        $this->idDetalle = $id;
        //dd('http://127.0.0.1:8000/api/detalles'.$this->idDetalle);
        $respuesta = Http::delete('http://127.0.0.1:8000/api/detalles/'.$this->idDetalle);
        if (!$respuesta->successful()) {
            dd($respuesta);
        }else{
            redirect('/detalles');
        }
    }
}
