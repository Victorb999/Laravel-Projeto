@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Clientes</div>
                <div class="form-row  justify-content-center filtro">
                  <div class="col-md-6">

                       Mostrar                   
                       <select name="paginar" id="paginar" onchange="top.location.href = this.options[this.selectedIndex].value">
                            <option value="padrao" selected disabled>{{request('paginar')}}</option>
                           <option value="{{route('cliente.index',['busca'=> request('busca'),'paginar'=>'4'])}}">4</option>
                           <option value="{{route('cliente.index',['busca'=> request('busca'),'paginar'=>'8'])}}">8</option>
                           <option value="{{route('cliente.index',['busca'=> request('busca'),'paginar'=>'10'])}}">10</option>
                       </select>
                        registros

                  </div>  

                  <div class="col-md-6">
                    <form action="{{route('cliente.index',['paginar'=>request('paginar'),'busca'=> request('busca')])}}" method="get">    
                                       
                    <div class="input-group">
                        <input type="text" name="busca" class="form-control" placeholder="Buscar cliente">
                        <span class="input-group-prepend">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </span>
                    </div>
                    </form>
                  </div>
                
                </div>


                <div id="tabelao">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                        <th scope="col">Cliente</th>
                        <th scope="col">Documento</th>
                        <th scope="col">Enviado em</th>
                        <th scope="col">Status</th>
                        <th scope="col">Data status</th>
                        </tr>
                    </thead>
                    <tbody>                    
                        @foreach($clientes as $cliente)
                        <tr>
                            <td>{{$cliente->nome}}</td>
                            <td>
                            @for ($i = 0; $i < $cliente->numDocumento; $i++)
                                <i class="fa fa-file-text" aria-hidden="true"></i>
                            @endfor
                            </td>
                            <td>{{$cliente->dataUltDocumento}}</td>
                            <td>
                            @if ($cliente->status === 'pendente')
                                <span class="badge badge-warning">Aguardando documento!</span>
                            @elseif ($cliente->status === 'aprovado')
                                <span class="badge badge-success">Aprovado com sucesso!</span>
                            @else
                                <span class="badge badge-danger">Documento irregular!</span>               
                            @endif
                            
                            </td>
                            <td>
                           
                            @if ($cliente->status === 'pendente')
                            @method('PUT')
                                <a href="{{route('cliente.aprova',['cliente'=> $cliente->id])}}"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Aprovar </a>
                                <a href="{{route('cliente.reprova',['cliente'=> $cliente->id])}}"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i> Reprovar </a>
                            @else
                                {{$cliente->dataStatus}}
                            @endif
                            </td>
                            
                        </tr>
                        @endforeach
                      
                    </tbody>
                    </table>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">                                    
                                    @include('pagination.pagination_stats', ['paginator' => $clientes])                   
                                </div>
                            </div>
                            <div class="row">
                                <div div class="col-md-12 ">
                                    <span class="pull-right">{{$clientes->links('pagination.pagination_links')}}</span>
                                </div>
                            </div>
                        </div>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection