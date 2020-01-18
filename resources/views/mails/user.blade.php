@component('mail::message')
# Welcome
Hello There , {{$data['name']}} , Welcome to Job Center Portal.
<br>
You have created new account with this email , and we need you to verfiy it, please click the link below 
to verify your account.
@component('mail::button', ['url' => route('account.activate' , $data['code'])])
Activate Account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
