<div class="card">
    <div class="card-header cardheader-custom">
        <h4 class="card-title">{{ __('Account Information') }}</h4>
    </div>
    <div class="card-body">

        @if ($saved)
            <x-action-message icon="bi bi-check-circle-fill" type="success">
                {{ __('Your settings has been saved successfully') }}
            </x-action-message>

        @enderror



        @livewire('profile.user-avatar')

        <form wire:submit.prevent="updateAccount">
            <div class="row g-3">

                <x-input wire:model.defer="state.username" type="text" label="{{ __('Username') }}" placeholder=""
                    class="form-group" />



                <x-input wire:model.defer="state.email" type="text" label="{{ __('Email Address') }}"
                    placeholder="" class="form-group" />


                @if (!$emailVerified)
                    <p class="fs-6 mt-2">
                        {{ __('Your email address is unverified.') }}

                        <button type="button" class="btn btn-link" wire:click.prevent="sendEmailVerification">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

               @if ($this->verificationLinkSent)
               <x-action-message v-show="verificationLinkSent" icon="bi bi-check-circle-fill" type="success">
                {{ __('A new verification link has been sent to your email address.') }}
                  </x-action-message>
                @endif


                @endif



                <div class="col-12 col-12 mb-3">
                    <div class="col-xxl-12 col-12 mb-3">
                        <x-button class="btn-dark" wire:loading.target="updateAccount">
                            {{ __('Save') }} </x-button>
                    </div>
                </div>
            </div>
        </form>
</div>
</div>
