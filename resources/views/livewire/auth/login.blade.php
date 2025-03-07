<div>
   <div class="card mt-5">
    <div class="card-header">
        Login
    </div>
    <div class="card-body">
        <form wire:submit='actlogin'>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror"  placeholder="Username" wire:model="username">
            @error('username')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <div class="form-group mt-3">
            <label for="password">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" wire:model='password'>

            @error('password')
            <small class="text-danger">
                {{ $message }}
            </small>
            @enderror

        </div>
        <small><a href="/register" wire:navigate>Belum punya akun ?</a> </small>


        <div class="mt-3">
            
            <button class="btn btn-primary w-100">Login</button>
        </div>

        </form>


    </div>
   </div>
</div>
