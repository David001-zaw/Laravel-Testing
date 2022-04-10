@component('mail::message')
# Hello {{ $name }}! Contact Form Testing

{{ $message }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent

{{-- For Customizing This Component
run this => php artisan vendor:publish --tag=laravel-mail
you'll see vendor folder in view :)
--}}
