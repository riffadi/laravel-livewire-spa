<div>
    <div class="card">
        <div class="card-body">
            <input type="hidden" wire:model="postId">
            <form wire:submit.prevent="edit">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" wire:model="title" class="form-control @error('title') is-invalid @enderror" placeholder="Enter Title">
                    @error('title')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea type="text" wire:model="content" class="form-control @error('content') is-invalid @enderror" rows="4" placeholder="Enter Content"></textarea>
                    @error('title')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
