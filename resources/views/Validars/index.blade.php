@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Pessoas válidas</div>
                
                <div id="tabelao">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Celular</th>
                     
                        </tr>
                    </thead>
                    <tbody>                    
                        @foreach($validars as $validar)
                        <tr>
                            <td>{{$validar->nome}}</td>
                            <td>{{$validar->email}}</td>
                            <td>{{$validar->celular}}</td>
                           
                            
                        </tr>
                        @endforeach
                      
                    </tbody>
                    </table>
                    <div>
                        <a class="btn btn-primary" href="{{ route('validar.create') }}">{{ __('Nova Pessoa') }}</a>
                    </div>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection