<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Serie::query()->orderBy('nome')->get();

        // view('pagina view', data[])
        // compact contém um array de uma variável
        // return view('pagina view')->('chave', valor)
        return view('series.index')->with('series', $series);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        // Curso 1 laravel:
        // $nomeSerie = $request->input('nome');
        // $serie = new Serie();
        // $serie->nome = $nomeSerie;
        // $serie->save();

        // Curso 2 laravel
        // Usando o Mass Assignment do Laravel Model::create();
        Serie::create($request->all());
        // O ->all() pega todas as informações passadas na requisição
        // Enquanto o ->only() pega as informações indicadas

        // return redirect(route('series.index'));
        // return redirect()->route('series.index');
        return to_route('series.index');
    }
}
