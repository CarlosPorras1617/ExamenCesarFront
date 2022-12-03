<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

use function Termwind\render;

class Clientes extends Component
{
    public $datosCrearCliente = [];
    public $erroresApi = [];

    public function render()
    {
        $respuesta = Http::get('http://127.0.0.1:8000/api/clientes');
        $clientes = $respuesta->json();
        return view('livewire.clientes', compact('clientes'));
    }

    public function crearCliente(){
        //mandar peticion POST
        $respuesta = Http::withHeaders(['Accept'=>'Application/json'])->post('http://127.0.0.1:8000/api/clientes', $this->datosCrearCliente);
        if ($respuesta->successful()) {

        }else {
            $this->erroresApi = $respuesta->json();
        }
    }
}
