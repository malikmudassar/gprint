@component('mail::message')
# Email for Quotation

<strong>From</strong> <br>
{{$data['name']}}
<br><br>
<strong>Email</strong> <br>
{{$data['email']}}
<br><br>
<strong>Contact #</strong> <br>
{{$data['contact']}}
<br><br>
<strong>Address</strong> <br>
{{$data['address']}}
<br><br>
<strong>Project Type</strong> <br>
{{$data['type']}}
<br><br>
<strong>Budget</strong> <br>
{{$data['budget']}}
<br><br>
<strong>Message</strong> <br>
{{$data['message']}}
<br><br>
{{ config('app.name') }}
@endcomponent
