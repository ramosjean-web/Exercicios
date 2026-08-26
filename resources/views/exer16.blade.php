@extends('layout')
@section('titulo', 'Exercicio 16')
@section('conteudo')
<h1>Exercico 16</h1>
<form method="post" action="/exer16resp">
    <div class="mb-3">
                <label for="valor1" class="form-label">Informe o preço: </label>
                <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="valor2" class="form-label">Informe o porcentual de desconto: </label>
                <input type="number" id="valor2" name="valor2" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
</form>
   @isset($desc)
            <p> O Valor com desconto é: {{ $des }}</p>
        @endisset
@endsection  