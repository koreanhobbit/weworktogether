@component('mail::message')

Thank you for contacting us, {{ ucfirst($detail->contact->name) }}!

{{ ucfirst($detail->response) }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent