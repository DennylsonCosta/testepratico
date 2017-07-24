<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\problema1;

class problema1Controller extends Controller
{

    public function index(){
        $problemas = problema1::get();
        
        return view('problema1',compact('problemas'));
    }

    public function recibo(Request $request){
        $titulo = $request->input('titulo');
        $tipo = $request->input('tipo');

        $prob = new problema1;
        $prob->titulo = $titulo;
        $prob->tipo = $tipo;

        if(strcmp($tipo,"professor") == 0){
            $recibo = 10;
        }else {
            $recibo = 3;
        }

        $prob->dias = $recibo;
        $prob->save();

        return view('problema1',compact('prob'));
    }
}