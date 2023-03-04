@section('title', 'Reset password')


<form class="auth-form" wire:submit.prevent="resetPassword">



    @error('invalidCredentials')
        <x-action-message icon="bi bi-exclamation-triangle-fill" type="danger">
            {{ $message }}
        </x-action-message>
    @enderror



    <p class="mb-4 lead">{{ __('Reset password') }}</p>

    <x-input wire:model.defer="email" label="{{ __('Email address') }}" placeholder="" class="form-group" />


    <x-input wire:model.defer="password" type="password" label="{{ __('Password') }}" placeholder=""
        class="form-group" />


    <x-input wire:model.defer="passwordConfirmation" type="password" label="{{ __('Confirm Password') }}" placeholder=""
        class="form-group" />




    <div class="form-group d-grid gap-2">
        <x-button class="btn-dark btn-block">{{ __(' Reset password') }}</x-button>

    </div>

</form>
