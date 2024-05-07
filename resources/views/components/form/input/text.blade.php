@props([
    'class' => 'form-control',
    'disabled' => false,
])
<input {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['class' => $class]) }}>
