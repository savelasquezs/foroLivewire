<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Thread;
use Livewire\Component;

class ShowThreads extends Component
{
    protected $listeners = ['categoryClicked'];
    public $search = "";
    private $categoryId = "";
    public function render()
    {
        $threads = Thread::query()->where("title", "like", "%$this->search%")->latest()->with("category", "user")
            ->withCount("replies");
        if ($this->categoryId) {
            $threads = Thread::where("category_id", $this->categoryId);
        }
        $threads = $threads->get();
        return view('livewire.show-threads', compact('threads'));
    }

    public function categoryClicked(Category $category)
    {
        $this->categoryId = (!($category instanceof Category)) ? "" : $category->id;
    }
}
