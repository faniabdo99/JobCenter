@component('mail::message')
# New Email
You recived this email from Women Job Center Home page.

<p><b>Message Title : </b>{{$data['title']}}</p>
<p><b>User Email : </b>{{$data['email']}}</p>
<p><b>User Name : </b>{{$data['name']}}</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
