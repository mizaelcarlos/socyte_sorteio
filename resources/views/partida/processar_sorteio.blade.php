@extends('layouts.app')

@section('content')

<div class="card-body bg-white">
    <div class="container">
        <h1 class="display-4"></h1>
        <h2>Resultado do sorteio</h2>
		
		
    </div>
</div>

@if(session()->has('status'))
   <div class="alert alert-primary" role="alert">   
        <p>{{session()->get('status')}}</p>
    </div>
@endif


<div class="container">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        @for($cont=1;$cont <= $quantidade_times;$cont++)
                        <th>Time {{$cont}}</th>
                        @endfor
                    </tr>    
                            
                        
                    </thead>
                    <tbody>
                    
                    
                    @foreach($times as $time)
                    
                        <td>
                            @foreach($time as $jogador)
                            
                                @if($jogador->goleiro)
                                <p><strong>Goleiro</strong> - {{ $jogador->nome}}</p>
                                @else
                                <p>{{ $jogador->nome}} - <strong>Nível</strong> {{ $jogador->nivel}} </p>
                                @endif
                            
                            @endforeach
                       </td>   
                    @endforeach
                    
                   
                        
                    </tbody>
                </table>                   
        </div>
    </div>
</div>
@endsection
