@props([
    'class' => null,
    'value' => 'Dashboard',
])
<li class="breadcrumb-item">
    <a {{ $attributes->merge(['class' => $class]) }}">
        {{ $value ?? $slot }}
    </a>
</li>
