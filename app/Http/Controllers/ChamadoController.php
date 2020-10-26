<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChamadoController extends Controller
{
    function index() {
        $chamados = DB::table('chamados')->get();

        return view('chamados.index', ['chamados' => $chamados]);
    }

    function create() {
        return view('chamados.create');
    }

    function save(Request $request) {
        $descricao = $request->input('descricao');

        $data = [
            'descricao' => $descricao,
            'id_cliente' => 1,
            'id_usuario' => 1,
            'status' => 0,
            'solucao' => ''
        ];

        $data = DB::table('chamados')->updateOrInsert($data);

        $msg = $data ? 'Chamado cadastrado com sucesso!' : 'Algo de errado aconteceu, tente novamente!';
        echo('<script> alert("'.$msg.'")</script>');
        if(! $data) {
            return view('chamados.create');
        }

        return view('chamados.index');
    }
}
