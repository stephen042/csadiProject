<div class="card-body">

    <div class="pt-4 pb-2">
        <x-message textColor='text-danger'/>
        <h5 class="card-title text-center pb-0 fs-4">Login to Your Admin</h5>
        <p class="text-center small">Enter your Email & password to login</p>
    </div>

    <form class="row" wire:submit='adminLogin'>

        <div class="col-12 my-2">
            <label class="form-label">Email</label>
            <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="email" class="form-control" wire:model='email'>
            </div>
            @error('email')
            <em class="text-danger">{{$message}}</em>
            @enderror
        </div>

        <div class="col-12 my-2">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" wire:model='password'>
            @error('email')
            <em class="text-danger">{{$message}}</em>
            @enderror
        </div>
        <div class="col-12">
            <br>
        </div>
        <div class="col-12">
            <button class="btn btn-primary w-100" type="submit">Login
                <x-spinner />
            </button>
        </div>

    </form>

</div>