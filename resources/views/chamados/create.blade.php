@extends('layouts.main')
@section('title', 'Criação de chamados')
@section('content')
    <div class="container">
        <h2>Criação de chamados</h2>

        <form method="post" action="/chamados/save">
            @csrf
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea class="form-control" type="text" name="descricao" id="descricao" placeholder="Descreva detalhadamente o problema"></textarea>
            </div>

            <input class="btn btn-success" type="submit" value="Salvar">
        </form>

    </div>
@endsection
