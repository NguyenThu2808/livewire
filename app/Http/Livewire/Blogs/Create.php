<?php

namespace App\Http\Livewire\Blogs;

use Livewire\Component;
use App\Models\Blog;

class Create extends Component
{
    public $saveSuccess = false;
    public $blog;

    protected $rules = [
        'blog.title' => 'required|min:6',
        'blog.content' => 'required|min:6',
    ];

    public function mount()
    {
        $this->blog = new Blog;
    }

    public function saveBlog()
    {
        $this->blog->series_id = 1;
//        $this->blog->slug = Str::slug($this->blog->title);
        $this->blog->save();
        $this->saveSuccess = true;
    }

    public function render()
    {
        return view('livewire.blogs.create')
            ->extends('layouts.app')
            ->section('content');
    }
}
