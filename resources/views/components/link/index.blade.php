@props([
    'class' => 'text-secondary link-secondary link-underline-opacity-0 link-underline-opacity-100-hover',
    'value',
])
<a {{ $attributes->merge(['class' => $class]) }}>
    {{ $value ?? $slot }}
</a>
