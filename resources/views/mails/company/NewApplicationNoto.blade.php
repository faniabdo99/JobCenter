@component('mail::message')
# New Job Application in Job Center
Hello {{$Application->Job->Company->name}} , You Have New Job Application.
## Application Details
<br>
<p><b>Job Title : </b> {{$Application->Job->title}}</p>
<p><b>Candidate : </b> {{$Application->User->name}}</p>
<p><b>Application Message : </b> <br>
    <p>{{$Application->message}}<p>
</p><br>
<p>Get the full application details from your applications page!</p>
@component('mail::button', ['url' => route('dash.company.home')])
Applications Page
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
