@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categoria - SHOW</div>

                <div class="card-body">

                    <p><strong>Id: </strong>{{ $categoria->id }}</p>
                    <p><strong>Nome: </strong>{{ $categoria->nome }}</p>
                    <p><strong>Criação: </strong>{{ $categoria->created_at }}</p>
                    <p><strong>Atualização: </strong>{{ $categoria->updated_at }}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
