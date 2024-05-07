@props(['class' => 'mb-3'])
<div {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</div>
