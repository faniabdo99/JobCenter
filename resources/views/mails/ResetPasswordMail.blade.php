@component('mail::message')
# Reset Password

Hello , {{$User->name}} <br>
You have requsted a password reset to your job center account , please click th button below to reset your password.
@component('mail::button', ['url' => route('forget.password.confirm' , [$User->id , $User->code])])
Reset Password
@endcomponent
if you didn't made this requste don't worry , just ignore this email and your password won't be changed.<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
