@extends('layout')
@section('titulo', 'Exercicio 17')
@section('conteudo')
<h1>Exercico 17</h1>
<form method="post" action="/exer17resp">
    <div class="mb-3">
                <label for="valor1" class="form-label">Informe o Capital</label>
                <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="valor2" class="form-label">Informe a taxa de juros</label>
                <input type="number" id="valor2" name="valor2" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="valor3" class="form-label">Informe o Periodo a ser calculado</label>
                <input type="number" id="valor3" name="valor3" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
   @isset($resul)
            <p>O Resultado é: {{ $resul }}</p>
        @endisset
@endsection   