<x-layout title="Séries">
    <a class="btn btn-dark mb-2" href="{{ route('series.create') }}">Adicionar</a>

    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
    @endisset

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('series.show', $serie) }}" class="text-decoration-none">
                    {{ $serie->nome }}
                </a>
                <span class="d-flex justify-content-between align-items-center gap-2">
                    <a  href="{{ route('series.edit', $serie) }}" class="btn btn-primary btn-sm" type="submit">Editar</a>
                    <form action="{{ route('series.destroy', $serie) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">X</button>
                    </form>
                </span>
            </li>
        @endforeach
    </ul>
</x-layout>
