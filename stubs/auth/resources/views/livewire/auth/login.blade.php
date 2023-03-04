@section('title', 'Sign in to your account')

<form class="auth-form" wire:submit.prevent="authenticate">



    @error('invalidCredentials')
        <x-action-message icon="bi bi-exclamation-triangle-fill" type="danger">
            {{ $message }}
        </x-action-message>
    @enderror



    <p class="mb-4 lead">{{ __('Sign in to your account') }}</p>

    <x-input wire:model.defer="username" label="{{ __('Username or Email') }}" placeholder=""
        class="form-group" />


    <x-input wire:model.defer="password" type="password" label="{{ __('Password') }}" placeholder=""
        class="form-group" />

    <div class="form-group d-grid gap-2">
        <x-button class="btn-dark btn-block">{{ __('Sign In') }}</x-button>
    </div>


    <div class="form-group text-center">
        <div class="custom-control custom-control-inline custom-checkbox">
            <input type="checkbox" wire:model.lazy="remember" id="remember" class="custom-control-input">
            <label class="custom-control-label" for="remember">{{ __('Keep me sign in') }}</label>
        </div>
    </div>

    <div class="text-center pt-3">
        @if (Route::has('register'))
            New here? <a href="{{ route('register') }}" class="link">{{ __('Create an account') }} </a> <span
                class="mx-2">·</span>
        @endif
        <a href="{{ route('password.request') }}" class="link">{{ __('Forgot Password?') }}</a>
    </div>
</form>
