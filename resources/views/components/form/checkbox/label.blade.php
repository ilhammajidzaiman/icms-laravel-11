@props([
    'class' => 'form-check-label',
    'value',
])
<label {{ $attributes->merge(['class' => $class]) }}>
    {{ $value ?? $slot }}
</label>
