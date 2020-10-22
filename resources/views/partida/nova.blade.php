@extends('layouts.app')

@section('content')
</br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Cadastrar partida </div>
                        <div class="card-body">


                        <form action="{{ route('partida.cadastrar') }}" method="POST">  
                          @csrf
                          <div class="container">

                                
                                    <div class="form-group" {{ $errors->has('Data') ? 'has-error' : ''}}">
                                        <label for="data" class="control-label">{{ 'Data' }}</label>
                                        <input class="form-control" name="data" type="date" id="data"  required>
                                        {!! $errors->first('data', '<p class="help-block">:message</p>') !!}
                                    </div>

                                    <div class="form-group" {{ $errors->has('Quantidade de jogadores por time') ? 'has-error' : ''}}">
                                        <label for="quantidade_jogadores_time" class="control-label">{{ 'Quantidade de jogadores por time' }}</label>
                                        <input class="form-control" name="quantidade_jogadores_time" type="text" id="quantidade_jogadores_time" placeholder="Insira a quantidade de jogaores por time" required>
                                        {!! $errors->first('quantidade_jogadores_time', '<p class="help-block">:message</p>') !!}
                                    </div>
                    
                                    <div class="form-group">
                                    <button type="submit" class="btn btn-primary mb-3">
                                        Salvar 
                                    </button>
                                    </div>
    
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
@endsection
