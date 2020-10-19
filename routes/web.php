<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('jogador','JogadorController');
Route::get('partida', ['as' => 'partida.index', 'uses' => 'PartidaController@Index']);
Route::get('partida/nova', ['as' => 'partida.nova', 'uses' => 'PartidaController@Nova']);
Route::post('partida/cadastrar', ['as' => 'partida.cadastrar', 'uses' => 'PartidaController@Cadastrar']);
Route::get('partida/sortear_jogadores/{partida}', ['as' => 'partida.sortear_jogadores', 'uses' => 'PartidaController@SortearJogadores']);
Route::post('partida/processar_sorteio', ['as' => 'partida.processar_sorteio', 'uses' => 'PartidaController@ProcessarSorteio']);
