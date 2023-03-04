<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-lg ']) }} type="sub">
    {{ $slot }}
    <div class="spinner-border" style="width: 1rem; height: 1rem;" role="status" wire:loading
        @if ($attributes->wire('loading')->hasModifier('target')) wire:target="{{ $attributes->wire('loading')->value() }}" @endif>
        <span class="visually-hidden">Loading...</span>
    </div>
</button>
