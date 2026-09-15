<x-mail::message>
# Nouveau message depuis le Portfolio

**De :** {{ $contactMessage->name }} ({{ $contactMessage->email }})

**Message :**
{{ $contactMessage->message }}

<x-mail::button :url="config('app.url')">
Retour au site
</x-mail::button>

Cordialement,<br>
Votre système de notification
</x-mail::message>
