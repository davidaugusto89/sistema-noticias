@extends('layout.main')

@section('content')
<div class="row">
    @foreach ($noticias as $noticia)
    <div class="col-sm-12 col-md-6 col-lg-4 d-flex flex-column align-self-stretch">
        <div class="card mb-4 box-shadow h-100">
            <div class="card-body d-flex flex-column">
                <strong class="card-title">{{ $noticia->titulo  }}</strong>
                <p class="card-text">{{ $noticia->manchete  }}</p>
                <a href="{{ route('noticias.index') }}/{{ $noticia->id  }}/{{ Str::slug($noticia->titulo) }}" class="btn btn-light btn-block mt-4 mt-auto">Acessar</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@stop