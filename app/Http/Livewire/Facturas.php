<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Facturas extends Component
{
    public $idFactura;
    public $datosCrearFactura = [];
    public $erroresApi = [];
    public function render()
    {
        $respuesta = Http::get('http://127.0.0.1:8000/api/facturas');
        $respuesta2= Http::get('http://127.0.0.1:8000/api/clientes');
        $facturas = $respuesta->json();
        $clientesID = $respuesta2->json();
        return view('livewire.facturas', compact('facturas', 'clientesID'));
    }
    public function eliminarFactura($id){
        $this->idFactura = $id;
        $respuesta = Http::delete('http://127.0.0.1:8000/api/facturas/' . $this->idFactura);
        if (!$respuesta->successful()) {
            dd($respuesta);
        }else{
            redirect('/facturas');
        }
    }
    public function crearFactura(){
        //mandar peticion POST
        $respuesta = Http::withHeaders(['Accept' => 'Application/json'])->post('http://127.0.0.1:8000/api/facturas', $this->datosCrearFactura);
        if ($respuesta->successful()) {
            return redirect('/facturas');
        } else {
            $this->erroresApi = $respuesta->json();
        }
    }
}
