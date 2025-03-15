@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categoria - CREATE</div>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                    <form action="{{ url('categoria') }}" method="post">
                        @csrf

                        <label>Nome:</label>
                        <input type="text" name="nome" class="form-control">

                        <button type="submit" class="btn btn-primary">ENVIAR</button>
                    </form>

            </div>
        </div>
    </div>
</div>
@endsection
