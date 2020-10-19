@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
             

            <div class="col-md-12">
                <div class="card">
                    <h2>Alterar jogador </h2>
                    <div class="card-body">
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form action="{{ route('jogador.update',$jogador->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="card-body bg-white">

                                    <div class="form-group" {{ $errors->has('Nome') ? 'has-error' : ''}}">
                                        <label for="nome" class="control-label">{{ 'Nome' }}</label>
                                        <input class="form-control" name="nome" type="text" id="nome" placeholder="Insira o nome da nome" value="{{ isset($jogador->nome) ? $jogador->nome : ''}}">
                                        {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
                                    </div>
                                    <div class="form-group">
                                        <label for="nivel" class="control-label">{{ 'Nível' }}</label>
                                        <select name="nivel" class="form-control" id="nivel" required>
                                        @foreach (json_decode('{"": "", "1":"Nível 1","2":"Nível 2","3":"Nível 3","4":"Nível 4","5":"Nível 5"}', true) as $optionKey => $optionValue)
                                            <option value="{{ $optionKey }}" {{ (isset($jogador->nivel) && $jogador->nivel == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group" {{ $errors->has('Goleiro') ? 'has-error' : ''}}">
                                        <label for="goleiro" class="control-label">{{ 'Goleiro' }}</label>
                                        <select name="goleiro" class="form-control" id="goleiro" required>
                                        @foreach (json_decode('{"": "", "1":"Sim","0":"Não"}', true) as $optionKey => $optionValue)
                                            <option value="{{ $optionKey }}" {{ (isset($jogador->goleiro) && $jogador->goleiro == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                                        @endforeach
                                        </select>
                                        
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
