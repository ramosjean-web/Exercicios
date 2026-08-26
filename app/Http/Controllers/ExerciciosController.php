<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    public function abrirFormExer1(){
        return view('exer1');
    }

    public function respostaExer1(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $soma = $valor1 + $valor2;
        return view('exer1', ['soma' => $soma]);
    }

    public function abrirFormExer2(){
        return view('exer2');
    }

    public function respostaExer2(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $sub = $valor1 - $valor2;
        return view('exer2', ['sub' => $sub]);
    }

    public function abrirFormExer3(){
        return view('exer3');
    }

    public function respostaExer3(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $mult = $valor1 * $valor2;
        return view('exer3', ['mult' => $mult]);
    }

    public function abrirFormExer4(){
        return view('exer4');
    }

    public function respostaExer4(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
            if ($valor2 == 0){
                return view('exer4', ['erro' => 'Não é possivel dividir por zero.']);
            }
            else{
                 $div = $valor1  / $valor2;
                return view('exer4', ['div' => $div]);
            }
    }
    public function abrirFormExer5(){
        return view('exer5');
    }

    public function respostaExer5(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $valor3 = $request->valor3;
        $media = ($valor1 + $valor2 + $valor3) / 3;
        return view('exer3', ['media' => $media]);
    }
public function abrirFormExer6(){
        return view('exer6');
    }

    public function respostaExer6(Request $request){
        $celsius = $request->valor1;
        
        $fahr = $celcius * 1.8 + 32;
        return view('exer6', ['fahr' => $fahr]);
    }
    public function abrirFormExer7(){
        return view('exer7');
    }

    public function respostaExer7(Request $request){
        $fahrenheit = $request->valor1;
        
        $cel = ($fahrenheit - 32) * (5/9);
        return view('exer7', ['cel' => $cel]);
    }
}
