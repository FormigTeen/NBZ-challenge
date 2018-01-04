<div class="row">
    <div class="col-xs-6 col-sm-3">
        <h4>Receita</h4>
        <span>R$ {{ number_format($receita, 2) }}</span>
    </div>
    <div class="col-xs-6 col-sm-3">
        <h4>Ticket Médio</h4>
        <span>R$ {{ number_format($ticket, 2) }}</span>
    </div>
    <div class="col-xs-6 col-sm-3">
        <h4>Média Diária</h4>
        <span>Indisponível</span>
    </div>
    <div class="col-xs-6 col-sm-3">
        @if ( Route::currentRouteName() == "dashboard" )
            <h4>Total de Pedidos Pagos</h4>
            <span>{{ $paysCard + $paysBoleto }}</span>
        @else
            <h4>Total de Pedidos Pagos</h4>
            <h6>( Cartão | Boleto )</h6>
            <span>{{ $paysCard }} | {{ $paysBoleto }}</span>
        @endif
    </div>
</div>