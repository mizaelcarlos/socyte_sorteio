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
                            <th>Quantidade de jogadores</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($partidas as $partida)
                        <tr>
                            <td>{{ $partida->data }}</td>
                            <td>{{ $partida->quantidade_jogadores_time }}</td>
                            <td>
                                <a href="{{ route('partida.sortear_jogadores',$partida->id) }}" title="Placeholder link title" class="text-decoration-none">
                                    Sortear jogadores
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-wallet2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
                                    </svg>
                                </a>
        
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="{{url('partida/nova')}}" title="Placeholder link title" class="text-decoration-none">
                Nova partida
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-up-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4 9a.5.5 0 0 1-.374-.832l4-4.5a.5.5 0 0 1 .748 0l4 4.5A.5.5 0 0 1 12 11H4z"/>
                    </svg>
                </a>
                   
        </div>
    </div>
</div>
@endsection
