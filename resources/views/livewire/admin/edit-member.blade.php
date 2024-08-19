<div class="card">
    <div class="card-body">
        <h5 class="card-title">Member's Details</h5>
        <!-- Profile Picture Display -->
        <div class="text-center mb-4">
            <div class="rounded-circle overflow-hidden" style="width: 150px; height: 150px; margin: 0 auto;">
                <img src="{{ asset('storage/' . $member->image) }}" alt="Profile Picture" class="img-fluid"
                    style="object-fit: cover; width: 100%; height: 100%;">
            </div>
            <p class="mt-2">Profile Picture</p>
        </div>
        <!-- Vertical Form -->
        <form class="row g-3" wire:submit.prevent='updateMember'>
            <div class="col-12">
                <label for="inputNanme4" class="form-label">Full Name</label>
                <input type="text" class="form-control" wire:model='full_name'>
                @error('full_name')
                <em class="text-danger">{{ $message }}</em>
                @enderror
            </div>
            <div class="col-12">
                <label for="inputEmail4" class="form-label">Position</label>
                <input type="text" class="form-control" wire:model='position'>
                @error('position')
                <em class="text-danger">{{ $message }}</em>
                @enderror
            </div>
            <div class="col-12">
                <label for="inputPassword4" class="form-label">Image</label>
                <input type="file" class="form-control" wire:model='image'>
                @if (!is_string($image))
                <img src="{{ $image->temporaryUrl() }}" class="img-fluid img-thumbnail m-2" alt="Image Preview"
                    width="100" height="100">
                @endif
                @error('image')
                <em class="text-danger">{{ $message }}</em>
                @enderror
            </div>
            <div class="col-12">
                <label for="inputEmail4" class="form-label">Start date <span
                        class="text-primary">*Optional*</span></label>
                <input type="date" class="form-control" wire:model='start_date'>
            </div>
            <div class="col-12">
                <label for="floatingTextarea"> Description</label>
                <textarea class="form-control" wire:model="description" placeholder=" Description" id="floatingTextarea"
                    style="height: 100px;">
                </textarea>
                @error('description')
                <em class="text-danger">{{ $message }}</em>
                @enderror
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Update
                    <x-spinner />
                </button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form><!-- Vertical Form -->

    </div>
</div>