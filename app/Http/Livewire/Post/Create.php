<?php

namespace App\Http\Livewire\Post;

use App\Post;
use Livewire\Component;

class Create extends Component
{
    // Define public vaiable
    public $title;
    public $content;
    
    public function render()
    {
        return view('livewire.post.create');
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post = Post::create([
            'title' => $this->title,
            'content' => $this->content
        ]);

        //  Flash Message
        session()->flash('message', 'Data saved successfully.');

        return redirect()->route('post.index');
    }
}
