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
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @if($users ?? '')
                @foreach($users ?? '' ?? '' as $user)
                <tr>
                   <td>{{$user->id_usuario}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->type}}</td>
                    <td class="action-col">
                        <form action="/users/{{$user->id_usuario}}/edit" method="post">
                            @csrf
                            <button class="btn btn-error"><i class="fa fa-edit"></i></button>
                        </form>
                        <form action="/users/{{$user->id_usuario}}/delete" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-error"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            @endif
            </tbody>
        </table>

        <a href="/users/create" class="btn btn-primary">Criar usuário</a>

    </div>
    <script>
        $()
    </script>
@endsection
