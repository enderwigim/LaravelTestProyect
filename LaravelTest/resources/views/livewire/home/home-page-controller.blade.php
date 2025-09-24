<div>
    @if ($selectedOption === 'Clientes')
        <livewire:customers.customer-grid />
        <livewire:customers.detail />
        <livewire:customers.customer-edit />
    @elseif ($selectedOption === 'Pedidos')
        <h1>HOLA</h1>
        {{-- <livewire:orders.sale-order-grid /> --}}
    @endif
</div>