@props([
    'class' => 'form-control',
    'disabled' => false,
])
{{-- <input {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['class' => $class]) }}> --}}

<li class="breadcrumb-item">
    <a href="{{ route('dashboard') }}">
        Dashboard
    </a>
</li>
