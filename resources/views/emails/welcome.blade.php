@component('mail::message')
# Thanks for visiting my website {{ $name }}!

We'll be touched in a minute.

@component('mail::button', ['url' => 'https://www.youtube.com'])
Go To Youtube
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
