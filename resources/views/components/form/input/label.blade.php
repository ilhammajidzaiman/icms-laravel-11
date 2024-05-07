@props([
    'class' => 'form-label',
    'value',
])
<label {{ $attributes->merge(['class' => $class]) }}>
    {{ $value ?? $slot }}
</label>
