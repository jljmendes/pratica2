<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){


        $pessoas = [
            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Jorge',
                'birth' => '24/04/1980',
                'idade' => 42],

              [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Guilherme',
                'birth' => '19/03/1999',
                'idade' => 13],

              [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Gleice',
                'birth' => '12/11/1992',
                'idade' => 29]
        ];

        $dados['pessoas'] = $pessoas;

        return view('bemvindo', $dados);

    }

    public function exercicio2() {

        $numero = 1;


        $url = 'https://i.pravatar.cc/150?img='.$numero;


        $dados['url'] = $url;

        return view('exercise', $dados);
    }

    public function index2(){
        return view('include');
    }

    public function layout(){
        return view('site');
    }

    public function layout2(){
        return view('layout2');
    }
}
