@extends('layouts.main')
@section('title', 'Usuários')
@section('content')
    <div class="container">
        <h2>Rota de usuários</h2>
        <table id="users-list" class="table table-light">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Tipo</th>
            </tr>
            </thead>
            <tbody>
            @if($users ?? '')
                @foreach($users ?? '' ?? '' as $user)
                <tr>
                   <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->type}}</td>
                </tr>
                @endforeach
            @endif
            </tbody>
        </table>

        <a href="/users/create" class="btn-btn-primary">Criar usuário</a>

    </div>
@endsection
