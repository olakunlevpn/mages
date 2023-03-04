@section('title', 'Confirm your password')
<form class="auth-form" wire:submit.prevent="confirm">



    @error('invalidCredentials')
        <x-action-message icon="bi bi-exclamation-triangle-fill" type="danger">
            {{ $message }}
        </x-action-message>
    @enderror


    <div class="lead">{{ __('Confirm your password') }}</div>

    <p class="mb-4 mt-2">{{ __('Please confirm your password before continuing') }}</p>



    <x-input wire:model.defer="password" type="password" label="{{ __('Password') }}" placeholder=""
        class="form-group" />


    <div class="form-group d-grid gap-2">
        <x-button class="btn-dark btn-block">{{ __('Confirm password') }}
        </x-button>
    </div>


    <div class="text-center pt-3">

        <a href="{{ route('password.request') }}" class="link">{{ __('Forgot Password?') }}</a>
    </div>
</form>
