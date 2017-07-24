<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\problema4;

class problema4Controller extends Controller
{

    public function index(){
        $palavras = problema4::get();
        return view('problema4',compact('palavras'));
    }

    public function imprimir(Request $request){
        $palavra = $request->input('palavra');

        $palavras = new problema4;
        $palavras->palavra = $palavra;
        $palavras->save();

        $resultado = [];
        for($i = 1;$i < 5;$i++){
            $p = "";
            for($j=1;$j<=$i;$j++){
                $p .= strtoupper($palavra)." ";
            }
            array_push($resultado, $p);
        }


        return view('problema4',['resultado' => $resultado]);
    }
}
 