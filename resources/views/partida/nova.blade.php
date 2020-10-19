@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h2>Sorteio partida</h2>
                    <div class="card-body">


                        <form action="{{ route('partida.cadastrar') }}" method="POST">  
                          @csrf
                          <div class="card-body bg-white">

                                <div class="row flex-auto">
                                <div class="form-group">
                                    <label for="data" class="control-label">{{ 'Data' }}</label>
                                    <input class="form-control" name="data" type="date" id="data" >
                                </div>

                                    <div class="form-group">
                                        <label for="quantidade_jogadores_time" class="control-label">{{ 'Quantidade de jogadores por time  ' }}</label>
                                        <input class="form-control" name="quantidade_jogadores_time" type="text" id="quantidade_jogadores_time" placeholder="Insira a quantidade de jogaores por time">
                                    </div>
                    
                                    <div class="form-group">
                                    <button type="submit" class="btn btn-primary mb-3">
                                        Salvar 
                                    </button>
                                    </div>
    
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
