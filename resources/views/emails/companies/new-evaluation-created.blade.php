<x-mail::message>
    # Avaliação!

    Você recebeu um novo comentário.

    <x-mail::button :url="config('api.frontend_url')">
        Clique aqui e confira
    </x-mail::button>

    Obrigado,<br>
    {{ config('app.name') }}
</x-mail::message>