@extends('layout')
@section('titulo', 'Exercicio 9')
@section('conteudo')
<h1>Exercico 9</h1>
<form method="post" action="/exer8resp">
    <div class="mb-3">
                <label for="valor1" class="form-label">Informe o raio do ciruclo: </label>
                <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div>
            
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
   @isset($area)
            <p> O Raio é: {{ $area }}</p>
        @endisset
@endsection  