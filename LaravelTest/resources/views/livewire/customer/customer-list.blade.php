<div>
    <h2>Listado de Clientes</h2>

    <ul>
        @foreach($this->customers as $customer)
            <li>{{ $customer->cus_commercialname }} ({{ $customer->cus_taxid }})</li>
        @endforeach
    </ul>
</div>