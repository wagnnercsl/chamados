@extends('layouts.main')
@section('title', 'WELCOME')
@section('content')
<div class="container">
    <img src="/img/meeting.svg" alt="">
    <h2>Controle de chamados</h2>
    <h3 style="overflow-y: wrap;">
        O sistema de chamados vai facilitar seu controle sobre as demandas de telemarketing.
        
        
    </h3>
    <p style="margin-top: 20px;">Entre as funcionalidades presentes estão:
    </p>
    <ul>
        <li>Cadastro de usuários com diferentes permissões no sistema</li>
        <li>
            Exibição do estado atual dos chamados do cliente, com a função de comentários para um melhor acompanhamento
        </li>
    </ul>
</div>
@endsection
