@extends('layout')
@section('titulo', 'Exercicio 15')
@section('conteudo')
<h1>Exercico 15</h1>
<form method="post" action="/exer15resp">
    <div class="mb-3">
                <label for="valor1" class="form-label">Informe o peso: </label>
                <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="valor2" class="form-label">Informe a Altura: </label>
                <input type="number" id="valor2" name="valor2" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
</form>
   @isset($imc)
            <p> O IMC é: {{ $imc }}</p>
        @endisset
@endsection  