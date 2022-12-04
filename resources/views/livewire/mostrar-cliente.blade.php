<form wire:submit.prevent='actualizarCliente'>
    @if (array_key_exists('message', $erroresApi))
        <div class="alert alert-danger">
            <b>{{ $erroresApi['message'] }}</b>
        </div>
    @endif
    <div>
        <div class="card-body box-profile">
            <br>
            <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" style="height: 19rem"
                    src="{{ asset('images/user.png') }}" alt="User profile picture">
            </div>
            <h3 class="profile-username text-center">
                {{ $cliente['Nombre'] . ' ' . $cliente['Ape1'] . ' ' . $cliente['Ape2'] }}</h3>
            <p class="text-muted text-center">Persona Moral</p>
            <ul class="list-group list-group-unbordered mb-3">
                <label for="list1">Nombre</label>
                <li id="list1" class="list-group">
                    <input wire:model='datosModificarCliente.Nombre' type="text" class="form-control"id="NombreForm"
                        placeholder="{{ $cliente['Nombre'] }}">
                </li>
                <label for="list2">Apellido Paterno</label>
                <li id="list2" class="list-group">
                    <input wire:model='datosModificarCliente.Ape1' type="text" class="form-control" id="apellidoPaternoForm"
                        placeholder="{{ $cliente['Ape1'] }}">
                </li>
                <label for="list3">Apellido Materno</label>
                <li id="list3" class="list-group">
                    <input wire:model='datosModificarCliente.Ape2' type="text" class="form-control" id="apellidoMaternoForm"
                        placeholder="{{ $cliente['Ape2'] }}">
                </li>
                <br>
                <a href="/clientes" class="btn btn-primary btn-block"><b>Regresar</b></a>
                <br>
                <button type="submit" class="btn btn-success"><b>Modificar</b></button>
            </ul>

        </div>
    </div>
</form>
