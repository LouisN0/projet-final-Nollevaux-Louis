@component('mail::message')
# A new event has been added to the website



@component('mail::button', ['url' => 'http://127.0.0.1:8000/events'])
show me !!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
