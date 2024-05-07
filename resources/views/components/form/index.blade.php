@props(['class' => null])
<form {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</form>
