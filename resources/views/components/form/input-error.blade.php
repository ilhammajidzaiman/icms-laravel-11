@props(['messages'])
@if ($messages)
    <div {{ $attributes->merge(['class' => 'invalid-feedback mt-2']) }}>
        @foreach ((array) $messages as $message)
            {{ $message }}.
        @endforeach
    </div>
@endif
