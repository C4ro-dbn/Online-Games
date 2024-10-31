<table class="table table-striped table-hover table-dark">
    <thead>
        <th>#</th>
        <th>Nombre</th>
        <th>Cantidad</th>
        <th>Total</th>
        <th> --- </th>
    </thead>
    <tbody>
        @foreach ($ventas as $venta)
            <tr>
                <td>{{ $venta->IdVentas }}</td>
                <td>{{ $venta->Nombre }}</td>
                <td>{{ $venta->Cantidad }}</td>
                <td>{{ $venta->Total }}</td>

            </tr>
        @endforeach
    </tbody>
</table>