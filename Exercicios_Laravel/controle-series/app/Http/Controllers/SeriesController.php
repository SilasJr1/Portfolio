<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;
use App\Http\Requests\ValidaSerieRequest;
use App\Services\{CriadorDeSerie, RemovedorDeSerie};

class SeriesController extends Controller
{
  // public function __construct()
  // {
  //   $this->middleware('auth');
  // }

  public function index(Request $request) {
      $series = Serie::query()->orderBy('nome')->get();
      $mensagem = $request->session()->get('mensagem');

      return view('series.index', compact('series','mensagem'));
  }

  public function create() {
    return view('series.create');
  }

  public function store(ValidaSerieRequest $request, CriadorDeSerie $criadorDeSerie) {

    $serie = $criadorDeSerie->criarSerie(
      $request->nome, 
      $request->qtd_temporadas, 
      $request->ep_por_temporada
    );

    $request->session()->flash('mensagem',
    "Série {$serie->nome} adicionada com sucesso.");

    return redirect()->route('listar_series');
  }

  public function destroy(Request $request, RemovedorDeSerie $removedorDeSerie) {

    $nomeSerie = $removedorDeSerie->removerSerie($request->id);

    $request->session()
    ->flash('mensagem',
        "Série $nomeSerie removida com sucesso."
        );

    return redirect()->route('listar_series');

  }

      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $serie = Serie::find($id);
      $novoNome = $request->nome;
      $serie->nome = $novoNome;
      $serie->save();
    }
}
