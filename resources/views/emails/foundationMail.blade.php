@component('mail::message')
#New Foundation message

Name : {{$detail['name']}}
Email : {{$detail['email']}}
Mesage : {{$detail['message']}}



Thanks,<br>
{{ config('app.name') }}
@endcomponent
