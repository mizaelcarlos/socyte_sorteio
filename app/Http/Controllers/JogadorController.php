<?php

namespace App\Http\Controllers;
use App\Models\Jogador;

use Illuminate\Http\Request;

class JogadorController extends Controller
{
    
    public function index()
    {
        //
        $jogadores = Jogador::all();
        return view('jogador.index',[

            'jogadores' => $jogadores
        ]);
    }

    
    public function create()
    {
        //
        return view('jogador.create');
    }

    
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

    
    public function show($id)
    {
        //
        $jogador = Jogador::find($id);
        return view('jogador.show', [
            'jogador' => $jogador
		 ]);
    }

    
    public function edit($id)
    {
        //
        $jogador = Jogador::find($id);
        return view('jogador.edit', [
            'jogador' => $jogador
		 ]);
    }

    
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

    
    public function destroy($id)
    {
        //
        $jogador = Jogador::find($id);
        $jogador->delete();
        
        return redirect()->route('jogador.index')
                        ->with('success','Jogador excluído com sucesso');
    }

}
