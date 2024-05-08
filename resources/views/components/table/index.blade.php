@props(['class' => 'table table-striped table-hover'])
<table {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</table>
