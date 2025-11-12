@component('mail::message')
# Validação da Conta Profissional

Olá, **{{ $nome }}** 👋  

Recebemos uma solicitação de criação de conta profissional.

**E-mail:** {{ $email }}  
**Data:** {{ $data }}

Mensagem:  
> {{ $msg }}

@component('mail::button', ['url' => 'https://seusite.com/verificar'])
Verificar Agora
@endcomponent

Obrigado,  
Equipe {{ config('app.name') }}
@endcomponent

{{-- <x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}