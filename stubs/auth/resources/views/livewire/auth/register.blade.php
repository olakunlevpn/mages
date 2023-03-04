@section('title', 'Create a new account')

<form class="auth-form" wire:submit.prevent="register">



    @error('invalidCredentials')
        <x-action-message icon="bi bi-exclamation-triangle-fill" type="danger">
            {{ $message }}
        </x-action-message>
    @enderror



    <p class="mb-4 lead">{{ __('Create a new account') }}</p>

    <x-input wire:model.defer="username" type="text" label="{{ __('Username') }}" placeholder=""
        class="form-group" />


  

    <x-input wire:model.defer="email" type="email" label="{{ __('Email Address') }}" placeholder=""
        class="form-group" />




    <x-input wire:model.defer="password" type="password" label="{{ __('Password') }}" placeholder=""
        class="form-group" />

    <x-input wire:model.defer="passwordConfirmation" type="password" label="{{ __('Confirm Password') }}"
        placeholder="" class="form-group" />



    <div class="form-group text-left">
        <div class="custom-control custom-control-inline custom-checkbox">
            <input type="checkbox" class="custom-control-input" wire:model.defer="terms" id="terms">
            <label class="custom-control-label" for="terms">
                I have read and agree to the <a href="#" target="_blank">terms of service</a>
            </label>
        </div>
        @error('terms')
            <div class="text-danger fs-6">{{ $message }}</div>
            @endif

        </div>

        <div class="form-group d-grid gap-2">
            <x-button class="btn-dark btn-block">{{ __('Register') }}</x-button>
        </div>



        <div class="text-center pt-3">
          Already registered? <a href="{{ route('login') }}" class="link">{{ __('Sign In') }} </a>


        </div>
    </form>
