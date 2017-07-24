<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\problema3;

class problema3Controller extends Controller
{
    
    public function index(){
        return view('problema3');
    }

    public function exibir(){
        $data = new problema3;
        $resultado = $data->get();
        
        $anos=0;

        while($resultado[0]['altura']>$resultado[1]['altura']){
            $resultado[0]['altura']+=0.02;
            $resultado[1]['altura']+=0.03;
            $anos++;
        }

        return view('problema3',['resultado' => $resultado, 'anos' => $anos]);
    }
}
