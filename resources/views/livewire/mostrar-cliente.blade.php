<form wire:submit.prevent='actualizarCliente'>
    @if (array_key_exists('message', $erroresApi))
        <div class="alert alert-danger">
            <b>{{ $erroresApi['message'] }}</b>
        </div>
    @endif
    <div>
        <br>
        <div class="card-body box-profile bg-light" style="border-radius: 10px">
            <br>
            <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" style="height: 17rem"
                    src="{{ asset('images/user.png') }}" alt="User profile picture">
            </div>
            <h3 class="profile-username text-center">
                {{ $cliente['Nombre'] . ' ' . $cliente['Ape1'] . ' ' . $cliente['Ape2'] }}</h3>
            <ul class="list-group list-group-unbordered mb-3">
                <label for="list1" style="font-family: 'Arial'; font-size: 24px; color: black; padding-left: 10px">Nombre:</label>
                <li id="list1" class="list-group" style="padding-left: 10px; padding-right: 10px">
                    <input wire:model='datosModificarCliente.Nombre' type="text" class="form-control"id="NombreForm"
                        placeholder="{{ $cliente['Nombre'] }}">
                </li>
                <label for="list2" style="font-family: 'Arial'; font-size: 24px; color: black; padding-left: 10px">Apellido Paterno:</label>
                <li id="list2" class="list-group" style="padding-left: 10px; padding-right: 10px">
                    <input wire:model='datosModificarCliente.Ape1' type="text" class="form-control" id="apellidoPaternoForm"
                        placeholder="{{ $cliente['Ape1'] }}">
                </li>
                <label for="list3" style="font-family: 'Arial'; font-size: 24px; color: black; padding-left: 10px">Apellido Materno:</label>
                <li id="list3" class="list-group" style="padding-left: 10px; padding-right: 10px">
                    <input wire:model='datosModificarCliente.Ape2' type="text" class="form-control" id="apellidoMaternoForm"
                        placeholder="{{ $cliente['Ape2'] }}">
                </li>
                <br>
                <a href="/clientes" class="btn btn-primary btn-block" style="padding-left: 10px"><b>Regresar</b></a>
                <br>
                <button type="submit" class="btn btn-success" style="padding-left: 10px"><b>Modificar</b></button>
                <br>
            </ul>

        </div>
    </div>
</form>
