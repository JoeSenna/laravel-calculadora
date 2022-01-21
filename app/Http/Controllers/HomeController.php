<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{   
    public function index(){
        return view('index');
    }
    
    public function calculadora(){
        return view('calculadora');
    }
    
    public function calcular(Request $request){
        $num1 = $request->num1; 
        $num2 = $request->num2;
        $operador = $request->operador;
        if ($operador === '+'){
            $result = $num1+$num2;
            return view('calcular', compact('result'));
        }
        if ($operador === '-'){
            $result = $num1-$num2;
            return view('calcular', compact('result'));
        }
        if ($operador === '*'){
            $result = $num1*$num2;
            return view('calcular', compact('result'));
        }
        if ($operador === '/'){
            $result = $num1/$num2;
            return view('calcular', compact('result'));
        }
    }
}