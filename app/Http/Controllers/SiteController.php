<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){


        $computador = [
            'pecas' => [
                'hd',
                'memoria',
                'processador',
                'placaMae',
                'gabinete',
                'gravador'
            ]

        ];

        return view('bemvindo', $computador);
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
