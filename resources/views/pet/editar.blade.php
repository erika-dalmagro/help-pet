@extends('layout')
@extends('topnav')
@section('content')
@if(Session::get('usuario'))
<div class="space">
<div class="ui container huge">
    <h1 class="ui center aligned header"> Edição de Pet </h1>

    <div class="ul list-group">
        <form action="{{ route('pet.atualizar', $pet->id) }}" enctype="multipart/form-data" method="post" class="needs-validation" novalidate>
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite o nome" value="{{ old('nome', $pet->nome) }}" required>
            </div>
            @error('nome')
            <div class="alert alert-danger">Erro ao atualizar o Nome</div>
            @enderror

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Digite a descrição" value="{{ old('descricao', $pet->descricao) }}" required>
            </div>
            @error('descricao')
            <div class="alert alert-danger">Erro ao atualizar a descrição</div>
            @enderror

            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="number" name="preco" class="form-control" id="preco" placeholder="Digite o Preço" value="{{ old('preco', $pet->preco) }}" required>
            </div>
            @error('preco')
            <div class="alert alert-danger">Erro ao atualizar o Preço</div>
            @enderror

            <div class="form-group">
                <label for="imagem">Imagem</label>
                <input type="file" name="imagem" class="form-control" id="imagem" required>
            </div>
            @error('imagem')
            <div class="alert alert-danger">Erro ao atualizar a imagem</div>
            @enderror
            <button type="submit" class="btn center aligned btn-outline-primary ui button">Enviar</button>
        </form>

    </div>
</div>
@else
<div class="space">
    <div class="ui container huge">
        <h1 class="ui center aligned header"> Você precisa ser um usuário admin par acessar essa página.</h1>
    </div>
</div>
@endif
@endsection