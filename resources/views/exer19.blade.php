@extends('layout')
@section('titulo', 'Exercicio 19')
@section('conteudo')
<h1>Exercico 19</h1>
<form method="post" action="/exer19resp">
    <div class="mb-3">
                <label for="valor1" class="form-label">Informe o valor em dias: </label>
                <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div>
            
            <button type="submit" class="btn btn-primary">Enviar</button>
</form>
   @isset($resul)
            <p> O resultado é : {{ ' horas' => $horas, 'minutos' => $minutos, 'segundos' => $sgundos }}</p>
        @endisset
@endsection  