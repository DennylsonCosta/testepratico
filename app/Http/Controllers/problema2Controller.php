<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\problema2;

class problema2Controller extends Controller
{

    public function index(){
        $quant = problema2::count();
        
        return view('problema2',compact('quant'));
    }

    public function gerar(){
        $matriz = array();

        for($i = 0;$i<5;$i++){
            for($j = 0;$j<5;$j++){
                $matriz[$i][$j]=rand(1,100);
            }
        }

        $array = array();
        foreach($matriz as $a){
            array_push($array,implode(',',$a));
        }
        $array = implode(',',$array);

        $dados = new problema2;
        $dados->numeros = $array;
        $dados->save();
        
        $quant = $dados->count();
        return view('problema2',
        [
            'matriz' => $matriz,
            'quant' => $quant, 
            'impar' => $this->impar($matriz), 
            'par' => $this->par($matriz)
        ]);
    }

    private function impar($matriz){
        $impar = array();
        for($i = 0;$i<5;$i++){
            for($j = 0;$j<5;$j++){
                if(($matriz[$i][$j]%2)==1){
                    $impar[$i][$j] = $matriz[$i][$j];
                }else {
                    $impar[$i][$j] = ' ';
                }
            }
        }
        return $impar;
    }

    private function par($matriz){
        $par = array();
        for($i = 0;$i<5;$i++){
            for($j = 0;$j<5;$j++){
                if(($matriz[$i][$j]%2)==0){
                    $par[$i][$j] = $matriz[$i][$j];
                }else {
                    $par[$i][$j] = ' ';
                }
            }
        }
        return $par;
    }
}
