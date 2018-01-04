<div class="row">
    <div class="col-xs-12 col-sm-6">
        <h2 class="sub-header">Mais Vendidos por Receita</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $moneyProducts as $product )
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->quantityRequest }}</td>
                        <td>R$ {{ number_format($product->valueRequest, 2) }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6">
        <h2 class="sub-header">Mais Vendidos por Quantidade</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $quantityProducts as $product )
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->quantityRequest }}</td>
                        <td>R$ {{ number_format($product->valueRequest, 2) }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>