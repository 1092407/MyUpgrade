@component('mail::message')
# Welcome {{$user->name}} !

Grazie per esserti regisrato al nostro sito web.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks {{ config('app.name') }}
@endcomponent
