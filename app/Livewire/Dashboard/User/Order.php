<?php

namespace App\Livewire\Dashboard\User;
use App\Models\Order as OrderModel;

use Livewire\Component;

class Order extends Component
{
    public function render()
    {
        $orders = OrderModel::latest()->paginate(10);

        return view('livewire.dashboard.user.order',['orders'=> $orders]);
    }
}
