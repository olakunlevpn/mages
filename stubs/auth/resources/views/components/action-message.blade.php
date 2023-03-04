@props([
    'type' => 'success',
    'icon' => '',
])

<div  {{ $attributes->merge(['class' => 'alert alert-'.$type.' d-flex align-items-center alert-dismissible']) }} role="alert">
    <i class="{{ $icon }}"></i> &nbsp;
    <div>
        {{ $slot }}
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
