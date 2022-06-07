@component('mail::message')
# Introduction

The request you made has been accepted

@component('mail::button', ['url' => 'http://127.0.0.1:8000'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
