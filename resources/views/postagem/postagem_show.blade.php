@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Postagem - SHOW</div>

                <div class="card-body">

                    <p><strong>Id: </strong>{{ $postagem->id }}</p>
                    <p><strong>Categoria: </strong>{{ $postagem->categoria->nome }}</p>
                    <p><strong>Título: </strong>{{ $postagem->titulo }}</p>
                    <p><strong>Criação: </strong>{{ $postagem->created_at }}</p>
                    <p><strong>Atualização: </strong>{{ $postagem->updated_at }}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
