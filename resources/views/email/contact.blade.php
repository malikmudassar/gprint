@component('mail::message')
# Email from Contact Form

<strong>From</strong> <br>
{{$data['name']}}
<br><br>
<strong>Email</strong> <br>
{{$data['email']}}
<br><br>
<strong>Subject</strong> <br>
{{$data['subject']}}
<br><br>
<strong>Message</strong> <br>
{{$data['message']}}
<br><br>
{{ config('app.name') }}
@endcomponent
