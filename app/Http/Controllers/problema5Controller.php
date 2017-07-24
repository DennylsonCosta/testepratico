<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\problema5;

class problema5Controller extends Controller
{

    public function index(){
        $anteriores = problema5::get();
        return view('problema5',compact('anteriores'));
    }

    public function verifica(Request $request){
        $numeros = $request->input('numeros');
        $numeros = explode(',',$numeros);
        $alerta = $this->check($numeros);
        if($alerta){
            return view('problema5',[ 'alerta' => $alerta]);
        }else{
            $num = new problema5;
            $num->numeros = $request->input('numeros');
            $num->save();
        }
        
        $resultado = $this->checaFibonacci($this->numeros);

        $resultado = implode(', ',$resultado);

        return view('problema5',['resultado' => $resultado]);
    }

    private function check($numeros){
        foreach($numeros as $c){
            if(!is_numeric($c)){
                return true;
            }else {
                $c = ((int)$c);
            }
        }
        sort($numeros,SORT_NUMERIC);
        $this->numeros = $numeros;
        
        return false;
    }

    private function fibonacci($n){
        $sequencia = array();

        for ( $i = 1,$j = 0; $i <= $n; $i++, $j++){
            if ($i <= 2) {
                $sequencia[$j] = $i;
            } else{
                $sequencia[$j] = $sequencia[$j - 1] + $sequencia[$j - 2];
                if($sequencia[$j]>=$n){
                    return $sequencia;
                }
            }
        }
        return $sequencia;
    }

    private function checaFibonacci($numeros = array()){
        $fib = $this->fibonacci($numeros[count($numeros)-1]);
        
        $res = array();
        foreach($numeros as $n){
            for($i = 0;$i < count($fib);$i++){
                if($n == $fib[$i]){
                    array_push($res,$n);
                }
            }
        }
        return $res;
    }
}
 