@extends('layouts.default')

@section('title', 'Nova Série')

@section('content')
    <form action="{{ route('series.store') }}" method="post">
        @csrf

        <div class="row mb-3">
            <div class="col-8">
                <label class="form-label" for="nome">Nome:</label>
                <input class="form-control" type="text" id="nome" name="nome" autofocus>
            </div>
            <div class="col-2">
                <label class="form-label" for="seasonsQty">N° temporadas:</label>
                <input class="form-control" type="text" id="seasonsQty" name="seasonsQty">
            </div>
            <div class="col-2">
                <label class="form-label" for="episodesPerSeason">Eps / Temporadas:</label>
                <input class="form-control" type="text" id="episodesPerSeason" name="episodesPerSeason">
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Adicionar</button>
    </form>
@endsection
