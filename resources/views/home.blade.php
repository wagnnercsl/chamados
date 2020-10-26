@extends('layouts.main')
@section('title', 'Chamados - Tela Inicial')
@section('content')
    <link rel="stylesheet" type="text/css" href={{asset('/css/home.css')}}>
    <section id="home">
        <div class="container container-home">
            <h1>O sistema de chamados vai permitir que sua equipe atentenda e resolva as demandas com mais agilidade!</h1>
            <img src="/img/meeting.svg" alt="">
        </div>
    </section>
<div class="container">
    <img src="/img/meeting.svg" alt="">
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
