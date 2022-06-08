@component('mail::message')

New message from the contact page with the following message from {{ $nom }}
    
    {{ $message }}

user email: {{ $email }}

{{ config('app.name') }}
@endcomponent
