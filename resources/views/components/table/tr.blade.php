@props(['class' => null])
<tr {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</tr>
