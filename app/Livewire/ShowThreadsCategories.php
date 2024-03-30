<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class ShowThreadsCategories extends Component
{
    public function render()
    {

        $categories = Category::all();
        return view('livewire.show-threads-categories', ["categories" => $categories]);
    }

    public function emitir(Category $category)
    {

        $this->dispatch("categoryClicked", ["category" => $category])->to(ShowThreads::class);
    }
}
