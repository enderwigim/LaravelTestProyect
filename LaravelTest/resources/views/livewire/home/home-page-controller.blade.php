<div>
    @if ($selectedOption === 'Clientes')
        <livewire:customers.customer-grid />
        <livewire:customers.detail />
        <livewire:customers.customer-edit />
    @elseif ($selectedOption === 'Pedidos')
        <livewire:orders.order-grid />
        {{-- <livewire:orders.sale-order-grid /> --}}
    @endif
</div>