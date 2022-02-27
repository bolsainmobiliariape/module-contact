@component('mail::message')
# Nuevos datos desde el formulario de Contacto - {{ config('app.name') }}

@component('mail::panel')

@foreach(config('module-contact.names') as  $key => $name)
- {{ $name }}: {{ $contact->{$key} }}
@endforeach

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
