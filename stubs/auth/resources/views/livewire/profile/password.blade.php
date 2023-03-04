<div class="card">
    <div class="card-header cardheader-custom">
        <h4 class="card-title">{{ __('Update Password') }}</h4>
    </div>
    <div class="card-body">

        @if ($saved)
            <x-action-message icon="bi bi-check-circle-fill" type="success">
                {{ __('Password has been updated successfully') }}
            </x-action-message>

        @enderror

        <form action="#" wire:submit.prevent="updatePassword">
            <div class="row g-3">

                <x-input wire:model.defer="old_password" type="password" label="{{ __('Password') }}" placeholder=""
                    class="form-group" />



                <x-input wire:model.defer="password" type="password" label="{{ __('New Password') }}" placeholder=""
                    class="form-group" />

                <x-input wire:model.defer="password_confirmation" type="password"
                    label="{{ __('Confirm New Password') }}" placeholder="" class="form-group" />


                <div class="col-12 col-12 mb-3">
                    <div class="col-xxl-12 col-12 mb-3">
                        <x-button class="btn-dark" wire:loading.target="updatePassword">
                            {{ __('Save') }} </x-button>
                    </div>
                </div>
            </div>
        </form>
</div>
</div>
