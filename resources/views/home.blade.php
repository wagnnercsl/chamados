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
@endsection
