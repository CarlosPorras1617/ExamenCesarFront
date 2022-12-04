<div>
    <br>
    <h1 class="container text-center bg-light" style="border-radius: 10px; font-family: 'Arial'">Tabla de clientes</h1>
    <div class="card-body bg-light" style="border-radius: 10px">
        <table class="table">
            <thead>
                <tr style="font-family: 'Arial'; font-size: 28px; text-align:center">
                    <th style="width: 15px">ID</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th style="width: 80px">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- for each para los usuarios -->
                @foreach ($clientes as $cliente)
                    <tr style="font-family: 'monospace'; font-size: 18px; text-align:center">
                        <td>{{ $cliente['idCliente'] }}</td>
                        <td>{{ $cliente['Nombre'] }}</td>
                        <td>{{ $cliente['Ape1'] }}</td>
                        <td>{{ $cliente['Ape2'] }}</td>
                        <td style="list-style: none; display: flex">
                            <a class="btn btn-info btn-sm" style="margin: auto" href="clientes/{{$cliente['idCliente']}}"><i class="material-icons">face</i></a>
                            <a class="btn btn-success btn-sm" style="margin: auto"  href="clientes/{{$cliente['idCliente']}}"><i class="material-icons">settings</i></a>
                            <button style="margin: auto" wire:click='eliminarCliente({{$cliente['idCliente']}})' class="btn btn-danger btn-sm"><i class="material-icons">delete</i></button>

                        </td>
                        <!-- <td>$cliente['facturas']['Nombre'][0]</td> -->

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <form wire:submit.prevent='crearCliente'>
        @if (array_key_exists('message', $erroresApi))
            <div class="alert alert-danger">
                <b>{{ $erroresApi['message'] }}</b>
            </div>
        @endif
        <br>
        <div class="container bg-light" style="border-radius: 10px">
        <div class="form-group">
            <label for="NombreInput" style="font-family: 'Arial'; font-size: 24px; color: black">Nombre:</label>
            <input wire:model='datosCrearCliente.Nombre' type="text" class="form-control" id="NombreInput"
                placeholder="Nombre(s)">
        </div>
        <div class="form-group">
            <label for="ApellidoMatInput" style="font-family: 'Arial'; font-size: 24px; color: black">Apellido Materno:</label>
            <input wire:model='datosCrearCliente.Ape1' type="text" class="form-control" id="ApellidoMatInput"
                placeholder="Apellido Materno">
        </div>
        <div class="form-group">
            <label for="ApellidoPatInput" style="font-family: 'Arial'; font-size: 24px; color: black">Apellido Paterno:</label>
            <input wire:model='datosCrearCliente.Ape2' type="text" class="form-control" id="ApellidoPatInput"
                placeholder="Apellido Paterno">
        </div>
        <br>
        <ul class="list-group list-group-unbordered mb-3">
        <button type="submit" class="btn btn-dark">Crear</button>
        </ul>
        <br>
    </form>
</div>

</div>
