@component('mail::message')
# Hey This is {{ $name }}!

We'll be touched in a minute.

Email => {{ $email }}<br>
Content => {{ $message }}


@component('mail::button', ['url' => 'https://www.youtube.com'])
Go To Youtube
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
