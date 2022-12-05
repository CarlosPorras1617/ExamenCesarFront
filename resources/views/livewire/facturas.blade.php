<div>
    <div>
        <br>
        <h1 class="container text-center bg-light" style="border-radius: 10px; font-family: 'Arial'">Tabla de facturas</h1>
        <div class="card-body bg-light" style="border-radius: 10px">
            <table class="table">
                <thead>
                    <tr style="font-family: 'Arial'; font-size: 28px; text-align:center">
                        <th style="width: 15px">ID</th>
                        <th>Folio</th>
                        <th>Cliente facturado</th>
                        <th>Fecha</th>
                        <th>IVA</th>
                        <th style="width: 80px">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- for each para los usuarios -->
                    @foreach ($facturas as $factura)
                        <tr style="font-family: 'monospace'; font-size: 18px; text-align:center">
                            <td>{{ $factura['idFactura'] }}</td>
                            <td>{{ $factura['Numero'] }}</td>
                            <td>{{ $factura['clientes']['Ape1'] }}</td>
                            <td>{{ $factura['Fecha'] }}</td>
                            <td>{{ $factura['IVA'] .'%'}}</td>
                            <td style="list-style: none; display: flex">
                                <a class="btn btn-info btn-sm" style="margin: auto" href="facturas/{{$factura['idFactura']}}"><i class="material-icons">face</i></a>
                                <a class="btn btn-success btn-sm" style="margin: auto"  href="facturas/{{$factura['idFactura']}}"><i class="material-icons">settings</i></a>
                                <button style="margin: auto" wire:click='eliminarFactura({{$factura['idFactura']}})' class="btn btn-danger btn-sm"><i class="material-icons">delete</i></button>

                            </td>
                            <!-- <td>$cliente['facturas']['Nombre'][0]</td> -->

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <form wire:submit.prevent='crearFactura'>
            @if (array_key_exists('message', $erroresApi))
                <div class="alert alert-danger">
                    <b>{{ $erroresApi['message'] }}</b>
                </div>
            @endif
            <br>
            <div class="container bg-light" style="border-radius: 10px">
            <div class="form-group">
                <label for="idCliente" style="font-family: 'Arial'; font-size: 24px; color: black">Cliente a facturar:</label>
                <select class="form-select" wire:model='datosCrearFactura.idCliente'>
                    @foreach ($clientesID as $cliente)
                        <option value="{{$cliente['idCliente']}}">{{$cliente['Nombre']}}</option>
                    @endforeach
                </select>
            </div>
                <div class="form-group">
                <label for="Fecha" style="font-family: 'Arial'; font-size: 24px; color: black">Fecha:</label>
                <input wire:model='datosCrearFactura.Fecha' type="date" class="form-control" id="Fecha"
                    placeholder="Fecha">
            </div>
            <div class="form-group">
                <label for="Numero" style="font-family: 'Arial'; font-size: 24px; color: black">Folio:</label>
                <input wire:model='datosCrearFactura.Numero' type="number" class="form-control" id="Numero"
                    placeholder="Folio">
            </div>
            <div class="form-group">
                <label for="IVA" style="font-family: 'Arial'; font-size: 24px; color: black">IVA%:</label>
                <input wire:model='datosCrearFactura.IVA' type="number" class="form-control" id="IVA"
                    placeholder="IVA">
            </div>

            <br>
            <ul class="list-group list-group-unbordered mb-3">
            <button type="submit" class="btn btn-dark">Crear</button>
            </ul>
            <br>
        </form>
    </div>
    </div>
</div>

