<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{   
    public function calculadora(){
        return view('calculadora');    
    }

    public function calcular(Request $request){
        $num1 = $request->num1;
        $num2 = $request->num2;
        $operador = $request->operador;

        if($operador == '+'){
            $result = $num1+$num2;
        }else if($operador == '-'){
            $result = $num1-$num2;
        }else if($operador == '*'){
            $result = $num1*$num2;
        }else if($operador == '/'){
            $result = $num1/$num2;
        }else{
            $result = 'Operador inválido';
        }


        return view('calcular', compact('result'));
    }
}