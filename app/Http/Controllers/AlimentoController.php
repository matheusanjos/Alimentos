<?php

namespace App\Http\Controllers;

use App\Alimento;
use App\Tipo;
use Illuminate\Http\Request;

class AlimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alimentos = Alimento::all();
        return view('alimentos', compact('alimentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Tipo::all();
        return view('novo-alimento', compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alimento = new Alimento();
        $alimento->nome = $request->nome;
        $alimento->data_fabricacao = $request->fab;
        $alimento->tipo = $request->input('tipo');
        $alimento->data_vencimento = $request->venc;
        $alimento->tipo_id = $request->cat;
        $alimento->save();

        return redirect('/alimentos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function show(Alimento $alimento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alimento = Alimento::find($id);
        $cats = Tipo::all();
        return view('editar-alimento', compact('alimento', 'cats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alimento = Alimento::find($id);
        $alimento->nome = $request->input('nome');
        $alimento->data_fabricacao = $request->input('fab');
        $alimento->tipo = $request->input('tipo');
        $alimento->data_vencimento = $request->venc;
        $alimento->tipo_id = $request->cat;
        $alimento->save();

        return redirect('/alimentos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alimento  $alimento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alimento $alimento)
    {
        //
    }
}
