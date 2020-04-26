@component('mail::message')
# @lang('mails.NewMailFromJobCenter')
{{$data['message']}}
### @lang('mails.From')
{{$data['full_name']}} | {{$data['email']}}
@endcomponent
