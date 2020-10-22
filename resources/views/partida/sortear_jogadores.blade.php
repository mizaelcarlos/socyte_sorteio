@extends('layouts.app')

@section('content')
</br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Confirmar presença dos jogadores </div>
                        <div class="card-body">
                            <form action="{{ route('partida.processar_sorteio') }}" method="POST">  
                                @csrf
                                <div class="card-body bg-white">
                                        
                                        <input type="hidden" id="quantidade_jogadores_time" name="quantidade_jogadores_time" value="{{$partida->quantidade_jogadores_time}}">

                                        @foreach($jogadores as $jogador)

                                        <div class="form-check"> 
                                            <input type="checkbox" id="selecionado" name="selecionados[{{ $jogador->id }}]" value="{{ $jogador->id }}">
                                            <label class="form-check-label" >{{$jogador->nome}}</label>
                                        </div>
                                        @endforeach
                                            <div class="form-group">
                                                </br>
                                                <button type="submit" class="btn btn-primary mb-3">
                                                    Sortear 
                                                </button>
                                            </div>
            
                                        </div>
                                    </div>
                                 </form>

                    
                    </div>
                </div>
            </div>
        </div>
@endsection
