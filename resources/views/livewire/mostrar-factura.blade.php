<form wire:submit.prevent='actualizarFactura'>
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
                    src="{{ asset('images/settings.png') }}" alt="User profile picture">
            </div>
            <h3 class="profile-username text-center">
                {{'Fecha: ' . $factura['Fecha'] . ' IVA: ' . $factura['IVA']}}</h3>
            <ul class="list-group list-group-unbordered mb-3">
                <label for="list1" style="font-family: 'Arial'; font-size: 24px; color: black; padding-left: 10px">Cliente:</label>
                <li id="list1" class="list-group" style="padding-left: 10px; padding-right: 10px">
                    <select class="form-select" wire:model='datosModificarFactura.idCliente'>
                        @foreach ($clientesID as $cliente)
                            <option value="{{$cliente['idCliente']}}">{{$cliente['Nombre']}}</option>
                        @endforeach
                    </select>
                </li>
                <label for="list2" style="font-family: 'Arial'; font-size: 24px; color: black; padding-left: 10px">Fecha:</label>
                <li id="list2" class="list-group" style="padding-left: 10px; padding-right: 10px">
                    <input wire:model='datosModificarFactura.Fecha' type="date" class="form-control" id="FechaForm">
                </li>
                <label for="list2" style="font-family: 'Arial'; font-size: 24px; color: black; padding-left: 10px">Folio:</label>
                <li id="list2" class="list-group" style="padding-left: 10px; padding-right: 10px">
                    <input wire:model='datosModificarFactura.Numero' type="number" class="form-control" id="FechaForm">
                </li>
                <label for="list2" style="font-family: 'Arial'; font-size: 24px; color: black; padding-left: 10px">IVA:</label>
                <li id="list2" class="list-group" style="padding-left: 10px; padding-right: 10px">
                    <input wire:model='datosModificarFactura.IVA' type="number" class="form-control" id="IVAForm">
                </li>
                <br>
                <a href="/facturas" class="btn btn-primary btn-block" style="padding-left: 10px"><b>Regresar</b></a>
                <br>
                <button type="submit" class="btn btn-success" style="padding-left: 10px"><b>Modificar</b></button>
                <br>
            </ul>

        </div>
    </div>
</form>

