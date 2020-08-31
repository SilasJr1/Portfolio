@extends('layout')

@section('cabecalho')
  Adicionar Série
@endsection

@section('conteudo')

    @include('erros', ['errors' => $errors])

  <form method="post">
    @csrf
    <div class="row">
      <div class="col col-8">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome"></input>
      </div>

      <div class="col col-2">
        <label for="qtd_temporadas">Nº de Temporadas</label>
        <input type="number" class="form-control" name="qtd_temporadas" id="qtd_temporadas"></input>
      </div>

      <div class="col col-2">
        <label for="ep_por_temporada">Ep. por Temporada</label>
        <input type="number" class="form-control" name="ep_por_temporada" id="ep_por_temporada"></input>
      </div>
    </div>

    <button class="btn btn-primary mt-2">Adicionar</button>
  </form>

  <a href="{{ route('listar_series')}}"><button class="btn btn-dark mt-2">Voltar</button></a>

@endsection
