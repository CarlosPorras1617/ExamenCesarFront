<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class MostrarCliente extends Component
{
    //datos a actualizar
    public $datosModificarCliente = [];
    public $erroresApi = [];
    //id cliente
    public $idCliente;
    //constructor
    public function mount($id){
        $this->idCliente = $id;
    }

    public function render()
    {
        $respuesta= Http::get('http://127.0.0.1:8000/api/clientes/'.$this->idCliente);
        if ($respuesta->successful()) {
            $cliente= $respuesta->json();
            return view('livewire.mostrar-cliente', compact('cliente'));
        }else {
            dd('Error');
        }
        //obtener User
        //$cliente = Http::get('http://127.0.0.1:8000/api/clientes/'.$this->idCliente)->json();
        //return view('livewire.mostrar-cliente', compact('cliente'));
    }
    public function actualizarCliente(){
        //mandar peticion PUT
        $respuesta = Http::withHeaders(['Accept'=>'Application/json'])->put('http://127.0.0.1:8000/api/clientes/'.$this->idCliente, $this->datosModificarCliente);
       if ($respuesta->successful()) {
            return redirect('/clientes');
        }else {
            $this->erroresApi = $respuesta->json();
        }
    }
}
