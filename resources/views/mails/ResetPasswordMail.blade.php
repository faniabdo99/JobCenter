@component('mail::message')
# @lang('mails.ResetPassword')

@lang('mails.Hello') {{$User->name}} <br>
@lang('mails.YouHaveRequstedAPasswordResetToYourJobCenterAccount')
@component('mail::button', ['url' => route('forget.password.confirm' , [$User->id , $User->code])])
@lang('mails.,PleaseClickTheButtonBelowToResetYourPassword')
@endcomponent
@lang('mails.ResetPassword')<br>
@lang('mails.IfYouDidntMadeThisRequsteDontWorryJustIgnoreThisEmailAndYourPasswordWontBeChanged')@lang('mails.Thanks')<br>
{{ config('app.name') }}
@endcomponent
