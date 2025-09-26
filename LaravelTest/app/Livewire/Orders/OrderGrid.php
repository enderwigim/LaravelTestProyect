<?php

namespace App\Livewire\Orders;

use Livewire\Component;

use App\Models\Docheader_doh;

use Livewire\WithPagination;
use Illuminate\Support\Facades\URL;

class OrderGrid extends Component
{
    use WithPagination; 
    public string $searchText = '';

    public function getPageUrl($pageName, $page)
    {
        return URL::current() . "?{$pageName}={$page}";
    }

    public function updatingSearchText(): void
    {
        $this->reset(); 
    }

    public function render()
    {
        $orders = Docheader_doh::with('customer')
            ->where([
                ['doh_type', '=', 2],
                ['doh_date', 'like', '%' . $this->searchText . '%']
            ])
            ->paginate(10);


        return view('livewire.orders.order-grid', [
            'orders' => $orders,
        ]);
    }
}
