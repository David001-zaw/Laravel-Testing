@props(['name', 'count'])

@php
    $classes = 'btn position-relative mx-5';
@endphp

<button type="button" {{ $attributes->class(['btn position-relative mx-5']) }}>
    {{ $name }}
    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
        {{ $count }}+
        <span class="visually-hidden">unread messages</span>
    </span>
</button>
