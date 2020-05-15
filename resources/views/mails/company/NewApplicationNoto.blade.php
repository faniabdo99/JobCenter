<h1> @lang('mails.NewJobApplicationInJobCenter')</h1>
Hello {{$CompanyName}} , @lang('mails.YouHaveNewJobApplication').
<h2>@lang('mails.ApplicationDetails')</h2>
<br>
<p><b>@lang('mails.JobTitle') </b> {{$JobTitle}}</p>
<p><b>@lang('mails.Candidate') </b> {{$UserName}}</p>
<p><b>@lang('mails.ApplicationMessage') </b> <br>
    <p>{{$Message}}<p>
</p><br>
<p>@lang('mails.GetTheFullApplicationDetailsFromYourApplicationsPage')</p>
<p>
<p><a href="{{route('user' , [$UserId , $UserSlug])}}" style="text-decoration: none;width: 180px;height: 50px;float: left;text-align: center;cursor: pointer;position: relative;font-size: 16px;color: rgb(255, 255, 255);line-height: 48px;text-transform: capitalize;backface-visibility: hidden;background: rgb(255, 51, 102);overflow: hidden;border-width: 1px;border-style: solid;
border-color:transparent;border-image: initial;transition: all 0.6s ease 0s;">@lang('mails.ViewProfile')</a><p><br>

<p><a href="{{route('dash.company.home')}}" style="text-decoration: none;width: 180px;height: 50px;float: left;text-align: center;cursor: pointer;position: relative;font-size: 16px;color: rgb(255, 255, 255);line-height: 48px;text-transform: capitalize;backface-visibility: hidden;background: rgb(255, 51, 102);overflow: hidden;border-width: 1px;border-style: solid;
border-color:transparent;border-image: initial;transition: all 0.6s ease 0s;">@lang('mails.ApplicationsList')</a><p><br>
</p>
<br><br>
<p>@lang('mails.Thanks'),<br>
{{ config('app.name') }}</p>
