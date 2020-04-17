<div>
    {{-- Be like water. --}}

    <form wire:submit.prevent="store">
        <div class="form-group">
            <label for="name">Student Name</label>
            <input type="text" wire:model="name" class="form-control @error('name') is-invalid @enderror">

            @error('name')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>

    
</div>
