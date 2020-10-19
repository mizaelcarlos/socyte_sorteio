@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Jogador </div>
                    <div class="card-body">
                        <br/>

                        <div class="table-responsive col-md-12">
                            <table class="table">
                                <tbody>
                                    <tr><th> Nome </th>
									<td> {{ $jogador->nome }} </td>
									</tr>
									<tr>
									<th> Nível </th>
									<td> {{ $jogador->nivel }} </td>
									</tr>
                                    <th> Goleiro </th>
									<td> 
                                    @if ($jogador->goleiro ==1) 
                                        Sim 
                                    @else
                                        Não 
                                    @endif 
                                    </td>
									</tr>
									<tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
