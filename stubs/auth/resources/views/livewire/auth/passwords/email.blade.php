@section('title', 'Reset password')




    <form class="auth-form" wire:submit.prevent="sendResetPasswordLink">

        @if ($emailSentMessage)
        <x-action-message icon="bi bi-check-circle-fill" type="success">
              {{ $emailSentMessage }}
         </x-action-message>
    @else

        @error('invalidCredentials')
            <x-action-message icon="bi bi-exclamation-triangle-fill" type="danger" message="{{ $message }}" />
        @enderror



        <p class="mb-4 lead">{{ __('Reset password') }}</p>

        <x-input wire:model.defer="email" label="{{ __('Email address') }}" placeholder="" class="form-group" />



        <div class="form-group d-grid gap-2">
            <x-button class="btn-dark btn-block">{{ __('Verify Email') }}</x-button>
        </div>


        <div class="text-center pt-3">
            Remember Password? please <a href="{{ route('login') }}" class="link">{{ __('Sign In') }} </a>
        </div>

        @endif
    </form>

