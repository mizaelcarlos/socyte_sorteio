@extends('layouts.app')

@section('content')

<div class="card-body bg-white">
    <div class="container">
        <h1 class="display-4"></h1>
        <h2>Consulta de jogadores</h2>
		
		
    </div>
</div>

@if(session()->has('status'))
   <div class="alert alert-primary" role="alert">   
        <p>{{session()->get('status')}}</p>
    </div>
@endif


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Nível</th>
                            <th>Goleiro</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($jogadores as $jogador)
                        <tr>
                            <td>{{ $jogador->nome }}</td>
                            <td>{{ $jogador->nivel }}</td>
                            <td>
                            @if ($jogador->goleiro ==1) 
                            
                                Sim 
                            @else
                                Não 
                            @endif
                             
                             
                            </td>
                            <td>
                                <a href="{{ route('jogador.show',$jogador->id) }}" title="Placeholder link title" class="text-decoration-none">
                                    Visualizar
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-wallet2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
                                    </svg>
                                </a>
                                <a href="{{ route('jogador.edit',$jogador->id) }}" title="Placeholder link title" class="text-decoration-none">
                                    Editar
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"></path>
                                    </svg>
                                </a>
        
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="{{ route('jogador.create') }}" title="Placeholder link title" class="text-decoration-none">
                Cadastrar jogador
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-up-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4 9a.5.5 0 0 1-.374-.832l4-4.5a.5.5 0 0 1 .748 0l4 4.5A.5.5 0 0 1 12 11H4z"/>
                    </svg>
                </a>

                </br>

                </br>
                <a href="{{url('partida/')}}"> Sorteio de partida </a>      
            </div>
        </div>
    </div>
</div>
@endsection
