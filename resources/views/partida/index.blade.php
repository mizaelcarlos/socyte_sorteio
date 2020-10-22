@extends('layouts.app')

@section('content')

<div class="card-body bg-white">
    <div class="container">
        <h1 class="display-4"></h1>
        <h2>Consulta de Partidas</h2>
		
		
    </div>
</div>

@if(session()->has('status'))
   <div class="alert alert-danger" role="alert">   
        <p>{{session()->get('status')}}</p>
    </div>
@endif


<div class="container">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Quantidade de jogadores por time</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($partidas as $partida)
                        <tr>
                            <td>{{ $partida->data->format('d/m/Y') }}</td>
                            <td>{{ $partida->quantidade_jogadores_time }}</td>
                            <td>
                                <a href="{{ route('partida.sortear_jogadores',$partida->id) }}" title="Placeholder link title" class="text-decoration-none">
                                    Sortear jogadores
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-ui-radios-grid" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M3.5 15a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm9-9a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 9a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zM16 3.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0zm-9 9a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0zm5.5 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zm-9-11a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 2a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </a>
        
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="{{url('partida/nova')}}" title="Placeholder link title" class="text-decoration-none">
                Cadastrar partida
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm.5 4a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z"/>
                    </svg>
                </a>
                   
        </div>
    </div>
</div>
@endsection
