<?php

namespace App\Http\Livewire\Post;

use App\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use withPagination;
    // public $posts;
    
    public function render()
    {
        return view('livewire.post.index', [
            'posts' => Post::latest()->paginate(5)
        ]);

        # another way
        // $this->posts = Post::latest()->paginate(5);
    }

    // Delete funtion

    public function destroy($postId)
    {
    $post = Post::find($postId);

    if($post) {
        $post->delete();
    }

    //flash message
    session()->flash('message', 'Data deleted successfully.');

    //redirect
    return redirect()->route('post.index');

    }
}
