<div class="card">
    <div class="card-body">
        <form>
            <div class="form-group mb-3">
                <label for="title">Title:</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Enter Title" wire:model="title">
                @error('title')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="text">text:</label>
                <textarea class="form-control @error('text') is-invalid @enderror" id="text" wire:model="text" placeholder="Enter text"></textarea>
                @error('text')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="d-grid gap-2">
                <button wire:click.prevent="updatePost()" class="btn btn-success btn-block">Update</button>
                <button wire:click.prevent="cancelPost()" class="btn btn-secondary btn-block">Cancel</button>
            </div>
        </form>
    </div>
</div>
