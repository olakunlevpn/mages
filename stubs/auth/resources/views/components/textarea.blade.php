@props([
    'type' => 'text',
    'label' => '',
    'placeholder' => '',
    'autofocus' => false,
])



<div class="{{ $attributes->get('class') }}">
    <label for="{{ $attributes->whereStartsWith('wire:model')->first() }}" class="mb-1">{{ $label }}</label>
    
    <textarea rows="4" {{ $attributes->whereStartsWith('wire:model') }}
        id="{{ $attributes->whereStartsWith('wire:model')->first() }}" type="{{ $type }}"
        placeholder="{{ $placeholder }}"
        class="form-control 
        @error($attributes->whereStartsWith('wire:model')->first()) is-invalid @enderror"
        {{ $autofocus ? 'autofocus' : '' }}> </textarea>
    

        @error($attributes->whereStartsWith('wire:model')->first())
            <div wire:key="error_{{ $attributes->whereStartsWith('wire:model')->first() }}" class="invalid-feedback">
                {{ Str::remove('state.', $message) }}</div>
        @enderror
    </div>
</div>
