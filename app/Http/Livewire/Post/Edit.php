<?php

namespace App\Http\Livewire\Post;

use App\Post;
use Livewire\Component;

class Edit extends Component
{
    // Define Variable

    public $title;
    public $content;
    public $postId;

    // Mount or construct function 

    public function mount($id)
    {
        $post = Post::find($id);

        if($post) {
            $this->title = $post->title;
            $this->content = $post->content;
            $this->postId = $post->id;
        }
    }

    // Update Funtion

    public function edit()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        if($this->postId)
        {
            $post = Post::find($this->postId);

            if($post){
                $post->update([
                    'title' => $this->title,
                    'content' => $this->content
                ]);
            }
        }

        //  Flash Message
        session()->flash('message', 'Data edited successfully.');

        return redirect()->route('post.index');
    }

    
    public function render()
    {
        return view('livewire.post.edit');
    }


}
