@props(['class' => 'mb-3 text-capitalize'])
<div {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</div>
