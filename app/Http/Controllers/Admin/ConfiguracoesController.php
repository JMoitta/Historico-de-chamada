<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Configuracao;

class ConfiguracoesController extends Controller
{
	/**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $configuracao = Configuracao::findOrFail(1);

        return view('admin.configuracoes.edit', compact('configuracao'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $configuracao = Configuracao::findOrFail(1);
        $data = $request->all();
        $data['id'] = 1;
        $configuracao->update($data);
        return response()->redirectToRoute('configuracoes.edit');
    }
}
