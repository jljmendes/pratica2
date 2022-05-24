<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){

        $nome = "Jorge";
        $sobrenome = "Mendes";


        $dados = [
            'nome' => $nome,
            'sobrenome' => $sobrenome,

        ];

        return view('bemvindo', $dados);
    }
    public function exit(){

        return view('sair');
    }
    public function users(Request $r){

        $data = [
            'quantidade' =>$r->qtd
        ];

        return view('usuarios', $data);
    }
}
