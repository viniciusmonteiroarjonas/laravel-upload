@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    @if(Session::has('message'))
                        <div class="alert alert-info text-center">{{Session::get('message')}}</div>
                    @endif
                    <div class="panel-heading text-center">Importar arquivo XLS para base de dados</div>
                    <div class="panel-body">
                        <form action="{{route('importa.arquivo')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <label>Importar arquivo</label>
                            <input type="file" class="form-control" class="file" name="import_file">
                            <br>
                            <input type="submit" class="btn btn-success btn-block" value="Importar">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Listagem de clientes</div>
                    <br>
                    <div class="container-fluid">
                        <div class="text-right">
                            <a href="{{route('download','xls')}}">
                                <button class="btn btn-info">Exportar Excel</button>
                            </a>
                            <a href="{{route('download','csv')}}">
                                <button class="btn btn-info">Exportar CSV</button>
                            </a>
                        </div>
                        <hr>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Sobrenome</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($dados as $cliente)
                                <tr>
                                    <td>{{$cliente->id}}</td>
                                    <td>{{$cliente->nome}}</td>
                                    <td>{{$cliente->sobrenome}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
