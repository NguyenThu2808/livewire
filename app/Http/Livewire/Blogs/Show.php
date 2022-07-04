<?php

namespace App\Http\Livewire\Blogs;

use Livewire\Component;
use App\Models\Blog;

class Show extends Component
{
    public $blog;

    public function mount($id)
    {
        $this->blog = Blog::where('id', $id)->first();
    }

    public function render()
    {
        return view('livewire.blogs.show')
            ->extends('layouts.app')
            ->section('content');
    }
}
