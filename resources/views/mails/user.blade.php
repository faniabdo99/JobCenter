@component('mail::message')
<h1 style="text-align:center;">@lang ('mails.Welcome')</h1>
<p direction="rtl" style="text-align: right;">
    @lang('mails.HelloThere') , {{$data['name']}} ,
    @lang('mails.WelcomeToJobCenterPortal')
    <br><br>
    @if($data['signup_method'] == 'signup')
      @lang ('mails.YouHaveCreatedNewAccountWithThisEmailAndWeNeedYouToVerfiyItPleaseClickTheLinkBelowToVerifyYourAccount')
    @else
      @lang ('mails.WelcomeToTheSite')
    @endif
</p>
<br><br>
<p direction="rtl" style="text-align: right;">
    <a href="{{route('account.activate' , $data['code'])}}" style="text-decoration: none;width: 180px;height: 50px;padding: 10px 25px;text-align: center;cursor: pointer;position: relative;font-size: 16px;color: rgb(255, 255, 255);line-height: 48px;text-transform: capitalize;backface-visibility: hidden;background: rgb(255, 51, 102);overflow: hidden;border-width: 1px;border-style: solid;
border-color:transparent;border-image: initial;transition: all 0.6s ease 0s;">
        @lang ('mails.ActivateAccount')</a>
</p>
<br>
<p direction="rtl" style="text-align: right;">
    @lang ('mails.Thanks')<br>{{ config('app.name') }}</p>
@endcomponent
