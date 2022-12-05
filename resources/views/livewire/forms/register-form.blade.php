<div class="text-center">
    <form wire:submit.prevent="handleRegister()">

        <img class="mb-4 img-fluid" src="https://crelogic.com/assets/img/crelogic-logo-hz.svg" alt="CRElogic logo">
        <h3 class="h3 mb-3 fw-normal">Please sign in</h3>

        @if(!$success == null)
            <p class="text-success my-1 px-2 mb-2">
                {{ $success }}
            </p>
        @endif

        <div class="form-floating">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                   wire:model="email">
            <label for="floatingInput">Email address</label>
            @error('email')
            <p class="text-danger my-1 px-2">
                {{ $message }}
            </p>
            @enderror

        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password"
                   wire:model="password">
            <label for="floatingPassword">Password</label>
            @error('password')
            <p class="text-danger my-1 px-2">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
    </form>
</div>
