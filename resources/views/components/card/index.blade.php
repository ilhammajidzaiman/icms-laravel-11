@props(['class' => 'card border-0 shadow-sm'])

<div {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</div>
