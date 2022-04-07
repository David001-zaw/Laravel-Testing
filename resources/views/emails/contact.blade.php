@component('mail::message')
# Hello {{ $name }}! Contact Form Testing

{{ $message }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
