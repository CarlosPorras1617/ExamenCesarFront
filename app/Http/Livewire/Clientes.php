<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

use function Termwind\render;

class Clientes extends Component
{
    public $idCliente;
    public $datosCrearCliente = [];
    public $erroresApi = [];


    public function render()
    {
        $respuesta = Http::get('http://127.0.0.1:8000/api/clientes');
        $clientes = $respuesta->json();
        return view('livewire.clientes', compact('clientes'));
    }

    public function crearCliente()
    {
        //mandar peticion POST
        $respuesta = Http::withHeaders(['Accept' => 'Application/json'])->post('http://127.0.0.1:8000/api/clientes', $this->datosCrearCliente);
        if ($respuesta->successful()) {

        } else {
            $this->erroresApi = $respuesta->json();
        }
    }

    public function eliminarCliente($id)
    {
        $this->idCliente = $id;
        //dd(gettype($this->idCliente));
        $respuesta = Http::delete('http://127.0.0.1:8000/api/clientes/'. $this->idCliente);
        if (!$respuesta->successful()) {
            dd($respuesta);
        }else{
            redirect('/clientes');
        }
    }
}
