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
        if(!empty($jogadores_selecionados)){

            $quantidade_jogadores_confirmados = count($jogadores_selecionados);
            $jogadores_sobrando = $quantidade_jogadores_confirmados % $quantidade_jogadores_time;
            $quantidade_times = ($quantidade_jogadores_confirmados - $jogadores_sobrando) / $quantidade_jogadores_time;
            $jogadores_escolhidos = array();
            $quantidade_minima_jogadores = $quantidade_jogadores_time * 2;
            $time_possui_goleiro = false;
        
        

       

        if($jogadores_sobrando > 0){

            $quantidade_times = $quantidade_times + 1;
        }

        $times = array();
        
    
        if($quantidade_jogadores_confirmados >= $quantidade_minima_jogadores ){

        
            for($i = 0; $i < $quantidade_times ; $i++){

                for($j = 0; $j < $quantidade_jogadores_time ; $j++){
                    
                    if(!empty($jogadores_selecionados)){

		
                        $jogador_escolhido = array_rand($jogadores_selecionados);
                        $jogador = Jogador::find($jogadores_selecionados[$jogador_escolhido]);
                        $goleiro = $jogador->goleiro;
                        
                        if($time_possui_goleiro == false){
                            
                            if($goleiro == 1){
                            $times[$i][$j] = $jogador;
                            unset($jogadores_selecionados[$jogador_escolhido]);
                            $time_possui_goleiro = true;
                            }
                            else{
                            
                                $times[$i][$j] = $jogador;
                                unset($jogadores_selecionados[$jogador_escolhido]);
                            }
                        }
                        else{
                
                            if($goleiro == 0){
                            $times[$i][$j] = $jogador;
                            unset($jogadores_selecionados[$jogador_escolhido]);
                            }
                            else{
                            
                             $jogador_escolhido = array_rand($jogadores_selecionados);
                             $jogador = Jogador::find($jogadores_selecionados[$jogador_escolhido]);
                             $times[$i][$j] = $jogador;
                             unset($jogadores_selecionados[$jogador_escolhido]);
                             
                            }
                        }       
                        
                    }
                
                }

                $time_possui_goleiro = false;
             }

        }
        else{
            
            return redirect()->route('partida.index')
                        ->with('status','Não é possível formar no mínimo 2 times.');
        }

        $cont = 0;
        return view('partida.processar_sorteio',[
            'quantidade_times' => $quantidade_times,
            'times' => $times,
            'cont' => $cont

        ]);
    }
    else{

        return redirect()->route('partida.index')
                        ->with('status','Selecione os jogadores para o sorteio.');

    }
        
    }
}
