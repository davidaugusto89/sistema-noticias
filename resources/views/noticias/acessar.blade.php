@extends('layout.main')

@section('title', ' -  '.$noticia->titulo)

@section('content')
<div class="row">
    <div class="col-12">
        <h2>{{ $noticia->titulo }}</h2>
        <small class="pt-1 pb-3 d-block">Data de publicação: {{ date('d/m/Y H:i:s', strtotime($noticia->created_at)) }}</small>
        <p>{!! nl2br(e($noticia->noticia)) !!}</p>
        <hr class="my-4"/>
        Categoria: <a href="{{ route('noticias.index') }}?search={{ $noticia->categoria }}" class="badge badge-light">{{ $noticia->categoria }}</a>
    </div>
</div>
@stop