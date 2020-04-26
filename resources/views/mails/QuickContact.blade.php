@component('mail::message')
# @lang('mails.NewEmail')
@lang('mails.YouRecivedThisEmailFromWomenJobCenterHomePage')

<p><b>@lang('mails.MessageTitle:') </b>{{$data['title']}}</p>
<p><b>@lang('mails.UserEmail:') </b>{{$data['email']}}</p>
<p><b>@lang('mails.UserName:') </b>{{$data['name']}}</p>

@lang('mails.Thanks'),<br>
{{ config('app.name') }}
@endcomponent
