@component('mail::message')
# New Mail From Job Center
{{$data['message']}}
### From
{{$data['full_name']}} | {{$data['email']}}
@endcomponent
