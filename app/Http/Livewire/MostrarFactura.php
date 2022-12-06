<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class MostrarFactura extends Component
{
    //datos a actualizar
    public $datosModificarFactura = [];
    public $erroresApi = [];
    //id cliente
    public $idFactura;
    //constructor
    public function mount($id){
        $this->idFactura = $id;
    }
    public function render()
    {
        $respuesta = Http::get('http://127.0.0.1:8000/api/facturas/'. $this->idFactura);
        $respuesta2 = Http::get('http://127.0.0.1:8000/api/clientes');
        $factura=$respuesta->json();
        $clientesID = $respuesta2->json();
        if ($respuesta->successful()) {
            return view('livewire.mostrar-factura', compact('factura', 'clientesID'));
        }else{
            dd($respuesta);
        }
    }
    public function actualizarFactura(){
        $respuesta = Http::withHeaders(['Accept'=>'Application/json'])->put('http://127.0.0.1:8000/api/facturas/'. $this->idFactura, $this->datosModificarFactura);
        if ($respuesta->successful()) {
            return redirect('/facturas');
        }else{
            $this->erroresApi = $respuesta->json();
        }
    }
}
