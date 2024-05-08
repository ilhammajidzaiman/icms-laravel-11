@props(['class' => null])
<tbody {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</tbody>
