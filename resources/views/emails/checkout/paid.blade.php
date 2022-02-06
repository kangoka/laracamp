@component('mail::message')
# Your Payment for {{ $checkout->Camp->title }} Camp Has Been Confirmed

Hi {{ $checkout->User->name }},
<br>
Your payment on Laracamp has been confirmed, now you can start your journey on <b>{{ $checkout->Camp->title }}</b> camp

@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
