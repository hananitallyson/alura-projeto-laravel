<x-layout title="Editar série '{!! $series->nome !!}'">
    <form action="{{ route('series.update', $series) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label" for="nome">Nome:</label>
            <input class="form-control" type="text" id="nome" name="nome" value="{{ $series->nome }}">
        </div>

        <button class="btn btn-primary" type="submit">Editar</button>
    </form>
</x-layout>
