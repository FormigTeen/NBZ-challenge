<div class="row">
    <div class="col-xs-12 col-sm-6">
        <h2 class="sub-header">Cidades por Receita</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Cidade</th>
                    <th>Quantidade</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $moneyCities as $city )
                    <tr>
                        <td>{{ $city->id }}</td>
                        <td>{{ $city->name }}</td>
                        <td>{{ $city->quantity }}</td>
                        <td>R$ {{ number_format($city->value, 2) }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6">
        <h2 class="sub-header">Cidades por Pedidos</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Cidade</th>
                    <th>Quantidade</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $quantityCities as $city )
                    <tr>
                        <td>{{ $city->id }}</td>
                        <td>{{ $city->name }}</td>
                        <td>{{ $city->quantity }}</td>
                        <td>R$ {{ number_format($city->value, 2) }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>