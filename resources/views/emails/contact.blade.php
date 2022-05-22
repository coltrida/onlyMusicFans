@component('mail::message')
# Message from site

Name: {{$name}} <br>
email: {{$email}} <br>
about: {{$about}} <br>
message: {{$message}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
