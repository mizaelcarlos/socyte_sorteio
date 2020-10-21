@extends('layouts.app')

@section('content')
        </br>
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <div class="card-header">Cadastrar Jogador </div>
                    <div class="card-body">

                        <form action="{{ route('jogador.store') }}" method="POST">
                          @csrf

                                    <div class="form-group">
                                        <label for="nome" class="control-label">{{ 'Nome ' }}</label>
                                        <input class="form-control" name="nome" type="text" id="nome" placeholder="Insira seu nome" value="{{ isset($jogador->nome) ? $jogador->nome : ''}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nivel" class="control-label">{{ 'Nível' }}</label>
                                        <select name="nivel" class="form-control" id="nivel" required>
                                        @foreach (json_decode('{"": "", "1":"Nível 1","2":"Nível 2","3":"Nível 3","4":"Nível 4","5":"Nível 5"}', true) as $optionKey => $optionValue)
                                            <option value="{{ $optionKey }}" {{ (isset($jogador->nivel) && $jogador->nivel == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="goleiro" class="control-label">{{ 'Goleiro?' }}</label>
                                        <select name="goleiro" class="form-control" id="goleiro" required>
                                        @foreach (json_decode('{"": "", "1":"Sim","0":"Não"}', true) as $optionKey => $optionValue)
                                            <option value="{{ $optionKey }}" {{ (isset($jogador->goleiro) && $jogador->nivel == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                                        @endforeach
                                    </select>
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
