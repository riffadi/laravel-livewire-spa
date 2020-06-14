<div>
    <div class="row">
        <div class="col-2">
            <input class="form-control form-control-sm w-10"  wire:model="search" type="text" placeholder="Enter keyword">
        </div>

        <div class="col d-flex justify-content-end">
            <a href="{{ route('post.create') }}" class="btn btn-md btn-success">Add Post</a>
        </div>
    </div>
    <table class="table table-bordered mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td class="text-center" colspan="2">
                    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <button wire:click="destroy({{ $post->id }})" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
</div>