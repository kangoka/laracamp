@component('mail::message')
# Register on Camp: {{ $checkout->Camp->title }}

Hi {{ $checkout->User->name }},
<br>
Thank you for register on <b>{{ $checkout->Camp->title }}</b>, please review your registration by clicking on the button below

@component('mail::button', ['url' => route('user.checkout.invoice', $checkout->id)])
Get Invoice
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
