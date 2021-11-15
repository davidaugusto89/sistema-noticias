@extends('layout.main')

@section('title', ' - Cadastrar')

@section('content')
<div class="row">
    <div class="col-12">
        <h2>Cadastrar</h2>
        <form method="post" action="{{ route('noticias.salvar') }}">
            {{ csrf_field()  }}
            <div class="form-group">
                <label for="slc_categoria">Categoria</label>
                <select class="form-control" id="slc_categoria" name="slc_categoria" required>
                    <option value="">Selecione uma categoria</option>
                    @foreach ($categoria_lista as $categoria)
                        <option value="{{ $categoria->id  }}">{{ $categoria->categoria }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="fld_titulo">Titulo</label>
                <input type="text" class="form-control" id="fld_titulo" name="fld_titulo" aria-describedby="fld_titulo" placeholder="Título da Notícia" required>
            </div>

            <div class="form-group">
                <label for="fld_manchete">Manchete (resumo página inicial)</label>
                <textarea class="form-control" id="fld_manchete" name="fld_manchete" rows="2" maxlength="200" required></textarea>
                <small id="emailHelp" class="form-text text-muted">Máximo 200 caracteres.</small>
            </div>

            <div class="form-group">
                <label for="fld_noticia">Notícia</label>
                <textarea class="form-control" id="fld_noticia" name="fld_noticia" rows="10" required></textarea>
            </div>

            <button type="post" class="btn btn-success"> Salvar</button>
        </form>
    </div>
</div>
@stop