@props(['class' => null])
<thead {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</thead>
