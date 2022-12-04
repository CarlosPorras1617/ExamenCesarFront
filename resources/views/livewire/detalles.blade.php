<div>
    <div>
        <br>
        <h1 class="container text-center bg-light" style="border-radius: 10px; font-family: 'Arial'">Tabla de detalles</h1>
        <div class="card-body bg-light" style="border-radius: 10px">
            <table class="table">
                <thead>
                    <tr style="font-family: 'Arial'; font-size: 28px; text-align:center">
                        <th style="width: 15px">ID</th>
                        <th>Folio</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th style="width: 80px">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- for each para los usuarios -->
                    @foreach ($detalles as $detalle)
                        <tr style="font-family: 'monospace'; font-size: 18px; text-align:center">
                            <td>{{ $detalle['idDetalle'] }}</td>
                            <td>{{ $detalle['Cantidad'] }}</td>
                            <td>{{ $detalle['descripcion'] }}</td>
                            <td>{{ '$'.$detalle['Precio']}}</td>
                            <td style="list-style: none; display: flex">
                                <a class="btn btn-info btn-sm" style="margin: auto" href="detalles/{{$detalle['idDetalle']}}"><i class="material-icons">face</i></a>
                                <a class="btn btn-success btn-sm" style="margin: auto"  href="detalles/{{$detalle['idDetalle']}}"><i class="material-icons">settings</i></a>
                                <button style="margin: auto" wire:click='eliminarDetalle({{$detalle['idDetalle']}})' class="btn btn-danger btn-sm"><i class="material-icons">delete</i></button>

                            </td>
                            <!-- <td>$cliente['facturas']['Nombre'][0]</td> -->

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <form wire:submit.prevent='crearDetalle'>
            @if (array_key_exists('message', $erroresApi))
                <div class="alert alert-danger">
                    <b>{{ $erroresApi['message'] }}</b>
                </div>
            @endif
            <br>
            <div class="container bg-light" style="border-radius: 10px">
            <div class="form-group">
                <label for="Cantidad" style="font-family: 'Arial'; font-size: 24px; color: black">Folio:</label>
                <input wire:model='datosCrearDetalle.Cantidad' type="number" class="form-control" id="Cantidad"
                    placeholder="Numero">
            </div>
            <div class="form-group">
                <label for=Descripcion" style="font-family: 'Arial'; font-size: 24px; color: black">Descripcion:</label>
                <input wire:model='datosCrearDetalle.Descripcion' type="text" class="form-control" id="Descripcion"
                    placeholder="Descripcion">
            </div>
            <div class="form-group">
                <label for="Precio" style="font-family: 'Arial'; font-size: 24px; color: black">Precio:</label>
                <input wire:model='datosCrearDetalle.Precio' type="number" class="form-control" id="Precio"
                    placeholder="Precio">
            </div>
            <div class="form-group">
                <label for="idFactura" style="font-family: 'Arial'; font-size: 24px; color: black">Factura del detalle:</label>
                <select class="form-select" wire:model='datosCrearDetalle.idFactura'>
                    @foreach ($facturasID as $factura)
                        <option value="{{$factura['idFactura']}}">{{$factura['clientes']['Ape1']}}</option>
                    @endforeach
                </select>
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
