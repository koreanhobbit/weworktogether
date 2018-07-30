@component('mail::message')

Email from {{ ucfirst($message->name) }} ({{ $message->email }}),

I want to talk about: {{ ucfirst($message->subject) }}

{{ ucfirst($message->message) }}

Thanks,<br>
{{ ucfirst($message->name) }}

@endcomponent