@extends('layout')
@section('titulo', 'Exercicio 7')
@section('conteudo')
<h1>Exercico 7</h1>
<form method="post" action="/exer6resp">
    <div class="mb-3">
                <label for="valor1" class="form-label">Informe a temperatura em Fahrenheit </label>
                <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div>
            
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
   @isset($cel)
            <p>A A temperatura em Celsius é: {{ $cel }}</p>
        @endisset
@endsection  