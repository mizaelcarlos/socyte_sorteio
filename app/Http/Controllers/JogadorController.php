<?php

namespace App\Http\Controllers;
use App\Models\Jogador;

use Illuminate\Http\Request;

class JogadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jogadores = Jogador::all();
        return view('jogador.index',[

            'jogadores' => $jogadores
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jogador.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data_hora = date("Y/m/d H:i:s");

        $jogador = new Jogador();
        $jogador->nome = $request->nome;
        $jogador->nivel = $request->nivel;
        $jogador->goleiro = $request->goleiro;
        $jogador->created_at = $data_hora;
        $jogador->save();
    
   
        return redirect()->route('jogador.index')
                        ->with('success','Jogador cadastrada com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $jogador = Jogador::find($id);
        return view('jogador.show', [
            'jogador' => $jogador
		 ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $jogador = Jogador::find($id);
        return view('jogador.edit', [
            'jogador' => $jogador
		 ]);
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
        //
        $data_hora = date("Y/m/d H:i:s");

        $jogador = Jogador::find($id);
        $jogador->nome = $request->nome;
        $jogador->nivel = $request->nivel;
        $jogador->goleiro = $request->goleiro;
        $jogador->updated_at = $data_hora;
        $jogador->update();
    
   
        return redirect()->route('jogador.index')
                        ->with('success','Jogador alterado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $jogador = Jogador::find($id);
        $jogador->delete();
        
        return redirect()->route('jogador.index')
                        ->with('success','Jogador excluído com sucesso');
    }

}
