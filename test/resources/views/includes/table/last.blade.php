<h2 class="sub-header">Últimos Vendidos</h2>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Criado em</th>
            <th>Cliente</th>
            <th>Produto</th>
            <th>Cidade</th>
            <th>Quantidade</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        @foreach( $requests as $request )
            <tr>
                <td>{{ $request->id }}</td>
                <td>{{ $request->created_at }}</td>
                <td>{{ $request->client->name }}</td>
                <td>{{ $request->product->name }}</td>
                <td>{{ $request->client->city->name }}</td>
                <td>{{ $request->quantity }}</td>
                <td>R$ {{ number_format($request->value, 2) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>