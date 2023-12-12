<?php

namespace App\Livewire\Dashboard\User;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Categories extends Component
{
    use WithPagination;
    public function render()
    {
        $categories = Category::latest()->paginate(10);

        return view('livewire.dashboard.user.categories',['categories'=> $categories]);
    }
}
