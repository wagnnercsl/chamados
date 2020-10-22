@extends('layouts.main')
@section('title', 'Criação de usuários')
@section('content')
    <div class="container">
        <h2>Criação de usuários</h2>

        <form method="post" action="/users/save">
            @csrf
            <div class="form-group">
                <label for="name">Nome:</label>
                <input class="form-control" type="text" name="name" id="name" placeholder="Informe o seu nome">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" type="email" name="email" id="email" placeholder="Informe seu email">
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input class="form-control" type="password" name="password" id="password" placeholder="Informe a sua senha">
            </div>

            <input class="btn btn-success" type="submit" value="Salvar">
        </form>

    </div>
@endsection
