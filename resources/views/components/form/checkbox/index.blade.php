@props(['class' => 'form-check mb-3'])
<div {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</div>
