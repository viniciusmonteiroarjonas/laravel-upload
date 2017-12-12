@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Import de arquivo CSV para Database</div>
                    <div class="panel-body">

                        <button class="btn btn-default btn-block">01 - Limpar Bases</button>
                        <hr>
                        <form>
                            <label>02 - Importar arquivo</label>
                            <input type="file" class="form-control">
                            <br>
                            <input type="submit" class="btn btn-success btn-block" value="Importar">
                        </form>
                        <hr>
                        <button class="btn btn-default btn-block">03 - Tratativa Base Web Prices</button>
                        <button class="btn btn-default btn-block">04 - Pontuação Web Prices</button>
                        <button class="btn btn-default btn-block">05 - Unificar Pontuação</button>
                        <button class="btn btn-default btn-block">06 - Limpa Duplicados</button>
                        <button class="btn btn-default btn-block">07 - Ranking</button>
                        <button class="btn btn-default btn-block">08 - Ranking Produto</button>
                        <button class="btn btn-default btn-block">09 - Ranking Produto Geral</button>
                        <button class="btn btn-default btn-block">10 - Delação Premiada</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
