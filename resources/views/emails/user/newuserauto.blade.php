@component('mail::message')

Please verify your account, {{ ucfirst($user->name) }}!

@component('mail::button', ['url' => route('user.verify', ['token' => $user->verifyUser->token])])
Click here to verify your account
@endcomponent

This account is made by administrator, and you can get the password by following the forgot password route in login menu. 

Thanks,<br>
{{ config('app.name') }}
@endcomponent