<!-- resources/views/child.blade.php -->

@extends('layouts.app')

@section('content')
    			<!-- Main -->
				<section id="main">
					<div class="container">

						<!-- Content -->
                        @foreach ($postagens as $value)
                            <article class="box post">
                                <header>
                                    <h2>{{ $value->titulo }}</h2>
                                    <p>Categoria: {{ $value->categoria->nome }}</p>
                                </header>
                                <p>{!! $value->descricao !!}</p>
                                <p>Autor: {{ $value->autor->name }}</p>
                            </article>
                        @endforeach

                        {{ $postagens->links() }}

					</div>


				</section>



@endsection