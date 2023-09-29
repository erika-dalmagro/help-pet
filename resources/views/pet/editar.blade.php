@php
$isMenu = false;
$navbarHideToggle = false;
@endphp
@extends('layouts/contentNavbarLayout')

@section('title', 'Como Funciona')

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/masonry/masonry.js')}}"></script>
@endsection

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
                <label for="cor">Cor</label>
                <input type="text" name="cor" class="form-control" id="cor" placeholder="Digite a cor" value="{{ old('cor', $pet->cor) }}" required>
            </div>
            @error('cor')
            <div class="alert alert-danger">Erro ao atualizar a cor</div>
            @enderror

            <div class="form-group">
                <label for="idade">Idade</label>
                <input type="number" name="idade" class="form-control" id="idade" placeholder="Digite a Idade" value="{{ old('idade', $pet->idade) }}" required>
            </div>
            @error('idade')
            <div class="alert alert-danger">Erro ao atualizar a Idade</div>
            @enderror

            <div class="form-group">
                <label for="genero">Gênero</label>
                <input type="text" name="genero" class="form-control" id="genero" placeholder="Digite o Gênero" value="{{ old('genero', $pet->genero) }}" required>
            </div>
            @error('genero')
            <div class="alert alert-danger">Erro ao atualizar o Gênero</div>
            @enderror

            <div class="form-group">
                <label for="peso">Peso</label>
                <input type="number" name="peso" class="form-control" id="peso" placeholder="Digite o Peso" value="{{ old('peso', $pet->peso) }}" required>
            </div>
            @error('peso')
            <div class="alert alert-danger">Erro ao atualizar o Peso</div>
            @enderror

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Digite a Descrição" value="{{ old('descricao', $pet->descricao) }}" required>
            </div>
            @error('descricao')
            <div class="alert alert-danger">Erro ao atualizar a Descrição</div>
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