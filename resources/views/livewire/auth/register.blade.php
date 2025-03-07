<div>
    <div class="card mt-5">
        <div class="card-header">
            Regiser
        </div>
        <div class="card-body">
            <form wire:submit='register'>
                <div class="form-group">
                    <label for="username">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" wire:model="email">
                    @error('email')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="form-group mt-3">
                    <label for="username">name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Username" wire:model="name">
                    @error('name')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>



                <div class="form-group mt-3">
                    <label for="username">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Username" wire:model="username">
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

                <div class="form-group mt-3">
                    <label for="password">Konfirmasi Password</label>
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Konfirmasi Password" wire:model='password_confirmation'>


                    @error('password_confirmation')

                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror

                </div>

                <small><a href="/login" wire:navigate > Silahkan login ?</a> </small>


                <div class="mt-3">

                    <button class="btn btn-primary w-100">Login</button>
                </div>

            </form>


        </div>
    </div>
</div>

