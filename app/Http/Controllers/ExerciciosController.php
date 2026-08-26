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
     public function abrirFormExer8(){
        return view('exer8');
    }
    public function respostaExer8(Request $request){
        $base = $request -> valor1;
        $altura = $request -> valor2;
        $area = ($base * $altura);
        return view('exer8',['area' => $area]);
    }
     public function abrirFormExer9(){
        return view('exer9');
    }
    public function respostaExer9(Request $request){
        $raio = $request -> valor1;
            $area = ($raio ** 2) *3.14;
        return view('exer9',['area' => $area]);
    }
    
    public function abrirFormExer10(){
        return view('exer10');
    }
    public function respostaExer10(Request $request){
        $largura = $request -> valor1;
        $altura = $request -> valor2;
        $perimetro = 2 * ($largura + $altura);
        return view('exer10',['perimetro' => $perimetro]);
    }
     public function abrirFormExer11(){
        return view('exer11');
    }
    public function respostaExer11(Request $request){
        $raio = $request -> valor1;
        $perimetro = 2 * 3.14 * $raio;
        return view('exer11',['perimetro' => $perimetro]);
    }
    public function abrirFormExer12(){
        return view('exer12');
    }
    public function respostaExer12(Request $request){
        $base = $request -> valor1;
        $expoente = $request -> valor2;
        $resultado = $base ** $expoente;
        return view('exer12',['perimetro' => $perimetro]);
    }
    public function abrirFormExer13(){
        return view('exer13');
    }
    public function respostaExer13(Request $request){
        $metro = $request -> valor1;
        $cm = $metro * 100;
        return view('exer13',['cm' => $cm]);
    }
    public function abrirFormExer14(){
        return view('exer14');
    }
    public function respostaExer14(Request $request){
        $km = $request -> valor1;
        $milhas = $km * 0.6213712;
        return view('exer14',[' milhas' => $milhas]);
    }
    public function abrirFormExer15(){
        return view('exer15');
    }
    public function respostaExer15(Request $request){
        $peso = $request -> valor1;
        $altura = $request -> valor2;
        $imc = $peso * $altura ** 2;
        return view('exer15',[' imc' => $imc]);
    }
}