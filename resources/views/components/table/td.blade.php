@props(['class' => null])
<td {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</td>
