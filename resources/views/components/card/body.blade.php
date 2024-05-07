@props(['class' => 'card-body'])
<div {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</div>
