@component('mail::message')
# @lang('mails.From')
{{$data['message']}}
### @lang('mails.From')
{{$data['full_name']}} | {{$data['email']}}
@endcomponent
