@component('mail::message')

Please verify your account, {{ ucfirst($user->name) }}!

@component('mail::button', ['url' => route('user.verify', ['token' => $user->verifyUser->token])])
Click here to verify your account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent