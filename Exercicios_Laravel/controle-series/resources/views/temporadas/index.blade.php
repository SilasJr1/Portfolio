@extends('layout')

@section('cabecalho')
    Temporadas de {{ $serie->nome }}
@endsection

@section('conteudo')

    <ul class="list-group">
        @foreach($temporadas as $temporada)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="/temporadas/{{ $temporada->id }}/episodios">
                        Temporada {{ $temporada->numero }}
                    </a>
                    <span class="badge badge-secondary">
                    {{ $temporada->getEpisodiosAssistidos()->count() }} / {{ $temporada->episodios->count() }}
                    </span>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('listar_series')}}"><button class="btn btn-dark mt-2">Voltar</button></a>

@endsection