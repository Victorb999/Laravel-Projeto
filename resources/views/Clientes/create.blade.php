@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Novo cliente</div>
               
                <div class="card-body">
                    <form method="POST" action="{{ route('cliente.store') }}">
                    @csrf
                        <div class="form-group row">
                                <label for="Nome" class="col-md-4 col-form-label text-md-right">Nome</label>

                                <div class="col-md-6">
                                    <input id="nome" type="text" class="form-control" name="nome"  required autocomplete="nome" autofocus>                                                             
                                </div>                            

                        </div>
                        <div class="form-group row">
                                <label for="numDocumento" class="col-md-4 col-form-label text-md-right">Número de documento</label>

                                <div class="col-md-6">
                                    <input id="numDocumento" type="number" class="form-control" name="numDocumento"  required  autofocus>                                                             
                                </div>                            

                        </div>
                        <div class="form-group row">
                                <label for="dataUltDocumento" class="col-md-4 col-form-label text-md-right">Data do Ultimo Documento</label>

                                <div class="col-md-6">
                                    <input id="dataUltDocumento" type="date" class="form-control" name="dataUltDocumento"  required  autofocus>                                                             
                                </div>                            

                        </div>

                        <input type="hidden" name="status" id="status" value="                        
                        @php
                        $random= rand(1,3);
                            //
                        @endphp
                            @if($random==1)
                                aprovado                           
                            @elseif($random==2)
                                reprovado
                            @else
                                pendente
                            @endif                        
                        ">

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Cadastrar
                                </button>                              
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
