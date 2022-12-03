<div class="container">
    <h1>Tabla de clientes</h1>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">ID</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th style="width: 40px">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- for each para los usuarios -->
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente['idCliente'] }}</td>
                        <td>{{ $cliente['Nombre'] }}</td>
                        <td>{{ $cliente['Ape1'] }}</td>
                        <td>{{ $cliente['Ape2'] }}</td>
                        <!-- <td>$cliente['facturas']['Nombre'][0]</td> -->

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <form wire:submit.prevent='crearCliente'>
            @if(array_key_exists('message', $erroresApi))
            <div class="alert alert-danger">
                <b>{{$erroresApi['message']}}</b>
            </div>
            @endif
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input wire:model='datosCrearCliente.Nombre' type="text" class="form-control" id="NombreInput"
                    placeholder="Nombre(s)">
            </div>
            <div class="form-group">
                <label for="ApellidoMat">Apellido Materno</label>
                <input wire:model='datosCrearCliente.Ape1' type="text" class="form-control" id="ApellidoMatInput"
                    placeholder="Apellido Materno">
            </div>
            <div class="form-group">
                <label for="ApellidoPat">Apellido Paterno</label>
                <input wire:model='datosCrearCliente.Ape2' type="text" class="form-control" id="ApellidoPatInput"
                    placeholder="Apellido Paterno">
            </div>
            <br>
            <button type="submit" class="btn btn-success">Crear</button>
    </form>

</div>
