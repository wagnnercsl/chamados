<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index() {

        $users = DB::table('users')->get();
        //exit(var_dump($users));

        return view('users.index', ['users' => $users]);
    }

    function create() {
        return view('users.create');
    }

    function save(Request $request) {

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $data = [
          'name' => $name,
          'email' => $email,
          'password' => $password
        ];

        $data = DB::table('users')->updateOrInsert($data);

        $msg = $data ? 'Usuário cadastrado com sucesso!' : 'Algo de errado aconteceu, tente novamente!';
        echo('<script> alert("'.$msg.'")</script>');
        if($data) {
            return view('users.create');
        }

        return view('users.index');
    }
}
