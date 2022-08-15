<div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
        <div class="wrap-login100 p-t-30 p-b-50">
            <span class="login100-form-title p-b-41">
                Account Login
            </span>
            @if (session()->has('error'))
                <span class="text-danger pl-5">{{ session('error') }}</span>
            @endif
            <form class="login100-form p-b-33 p-t-5" wire:submit.prevent="login">
                <div class="wrap-input100">
                    <input class="input100" type="text" wire:model.lazy="email" placeholder="Username">
                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    @error('email') <span class="text-danger pl-5"> {{ $message }} </span>@enderror
                </div>
                <div class="wrap-input100">
                    <input class="input100" type="password" wire:model.lazy="password" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    @error('password') <span class="text-danger pl-5"> {{ $message }} </span>@enderror
                </div>
                <div class="container-login100-form-btn m-t-32">
                    <button class="login100-form-btn" type="submit">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
