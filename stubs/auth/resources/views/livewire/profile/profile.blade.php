<div class="card">
    <div class="card-header cardheader-custom">
        <h4 class="card-title">{{ __('Profile Information') }}</h4>
    </div>
    <div class="card-body">

        @if ($saved)
        <x-action-message icon="bi bi-check-circle-fill" type="success">
            {{ __('Your settings has been saved successfully') }}
        </x-action-message>
           
          @enderror

        <form wire:submit.prevent="updateAccount">
            <div class="row g-3">

                <x-input wire:model.defer="state.first_name" type="text" label="{{ __('First Name') }}"
                placeholder="" class="form-group" />



                <x-input wire:model.defer="state.last_name" type="text" label="{{ __('Last Name') }}"
                    placeholder="" class="form-group" />

                    <x-input wire:model.defer="state.address" type="text" label="{{ __('Address') }}"
                    placeholder="" class="form-group" />

                    <x-input wire:model.defer="state.city" type="text" label="{{ __('City') }}"
                    placeholder="" class="form-group" />


                    <x-input wire:model.defer="state.state" type="text" label="{{ __('State') }}"
                    placeholder="" class="form-group" />


                    <x-input wire:model.defer="state.country" type="text" label="{{ __('Country') }}"
                    placeholder="" class="form-group" />


                <x-textarea wire:model.defer="state.about" type="text" label="{{ __('About') }}"
                    placeholder="" class="form-group" />
                   
                

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