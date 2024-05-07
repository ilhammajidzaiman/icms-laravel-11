@props([
    'class' => 'form-check-input',
    'disabled' => false,
])
<input {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['class' => $class]) }}>
