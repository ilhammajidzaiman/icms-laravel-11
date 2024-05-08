@props(['class' => 'text-capitalize'])
<th {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</th>
