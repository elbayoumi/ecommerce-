<?php

namespace App\Livewire\Dashboard\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ShowUsers extends Component
{
    use WithPagination;
    public function render()
    {
        $users = User::latest()->paginate(10);
        return view('livewire.dashboard.user.show-users',['users'=> $users]);
    }

}
