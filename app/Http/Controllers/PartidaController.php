<?php

namespace App\Http\Controllers;
use App\Models\Partida;
use App\Models\Jogador;

use Illuminate\Http\Request;

class PartidaController extends Controller
{
    //
    public function index(){

        $partidas = Partida::all();

        return view('partida.index',[
            'partidas' => $partidas
        ]);
    }

    public function nova(){

        return view('partida.nova');
    }

    public function cadastrar(Request $resquest){

        $data_hora = date("Y/m/d H:i:s");
        $partida = new Partida();
        $partida->data = $resquest->data;
        $partida->quantidade_jogadores_time = $resquest->quantidade_jogadores_time;
        $partida->created_at = $data_hora;
        $partida->save();

        return redirect()->route('partida.index')
                        ->with('success','Jogador cadastrada com sucesso.');

    }

    public function sortearJogadores($id){

        $partida = Partida::find($id);
        $jogadores = Jogador::all();

        return view('partida.sortear_jogadores',[
            'partida' => $partida,
            'jogadores' => $jogadores
        ]);

    }

    public function processarSorteio(Request $request){

        $quantidade_jogadores_time = intval($request->quantidade_jogadores_time);
        $jogadores_selecionados = $request->selecionados;
        $quantidade_jogadores_confirmados = count($jogadores_selecionados);
        $jogadores_sobrando = $quantidade_jogadores_confirmados % $quantidade_jogadores_time;
        $quantidade_times = ($quantidade_jogadores_confirmados - $jogadores_sobrando) / $quantidade_jogadores_time;
        $jogadores_escolhidos = array();
        
        if($jogadores_sobrando > 0){

            $quantidade_times = $quantidade_times + 1;
        }

        $time = array();
        
       
        for($i = 0; $i <= $quantidade_jogadores_confirmados ; $i++){
        
            $jogador_escolhido = array_rand($jogadores_selecionados);
            if(in_array($jogador_escolhido,$jogadores_escolhidos)){
                
                continue;

            }
            $time[] = $jogador_escolhido;
            $jogadores_escolhidos[] = $jogador_escolhido;
            
           
        }

        var_dump(print_r($time));
        

    }
}
