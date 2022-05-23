@component('mail::message')
# Message from site

<b>Name:</b> {{$name}} <br>
<b>email:</b> {{$email}} <br>
<b>about:</b> {{$about}} <br>
<b>message:</b> {{$message}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
