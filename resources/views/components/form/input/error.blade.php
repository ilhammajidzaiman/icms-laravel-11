@props([
    'class' => 'invalid-feedback mt-2',
    'messages',
])
@if ($messages)
    <div {{ $attributes->merge(['class' => '$class']) }}>
        @foreach ((array) $messages as $message)
            {{ $message }}.
        @endforeach
    </div>
@endif
