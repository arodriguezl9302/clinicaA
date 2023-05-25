<x-mail::message>
Hola, {{ $login}}
presiona el siguiente boton, para actulizar tu contraseña
 
<x-mail::button :url="$url">
Cambiar contraseña
</x-mail::button>
 
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
