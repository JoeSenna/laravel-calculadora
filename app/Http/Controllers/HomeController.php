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





    
    // public function soma(Request $request){
    //     $num1 = $request->num1; 
    //     $num2 = $request->num2;
    //     $result = $num1+$num2;
    //     $operador = $request->operador;
    //     //$operador = $request->operador;
    //     return view('soma', compact('result', 'operador'));    
    // }
    
    // public function sub(Request $request){
    //     $num1 = $request->num1;
    //     $num2 = $request->num2;
    //     $result = $num1-$num2;
    //     $operador = $request->operador;
    //     return view('sub', compact('result', 'operador'));    
    // }
    
    // public function mult(Request $request){
    //     $num1 = $request->num1;
    //     $num2 = $request->num2;
    //     $result = $num1*$num2;
    //     $operador = $request->operador;
    //     return view('mult', compact('result', 'operador'));    
    // }
    
    // public function div(Request $request){
    //     $num1 = $request->num1;
    //     $num2 = $request->num2;
    //     $result = $num1/$num2;
    //     $operador = $request->operador;
    //     return view('div', compact('result', 'operador'));    
    // }
    
    

    

    //     if($operador == '+'){
    //         $result = $num1+$num2;
    //     }else if($operador == '-'){
    //         $result = $num1-$num2;
    //     }else if($operador == '*'){
    //         $result = $num1*$num2;
    //     }else if($operador == '/'){
    //         $result = $num1/$num2;
    //     }else{
    //         $result = 'Operador inválido';
    //     }


    //     return view('calcular', compact('result'));
    // }
}