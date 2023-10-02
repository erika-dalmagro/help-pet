@php
$isMenu = false;
$navbarHideToggle = false;
@endphp
@extends('layouts/contentNavbarLayout')

@section('title', 'Formulario')

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/masonry/masonry.js')}}"></script>
@endsection

@section('content')

@if(Session::get('usuario'))

<div class="space"></div>
<div class="row">
  <div class="col-md-12">
    <div class="card mb-4">
    <h2 class="ui center aligned header centro" style="margin-top: 30px;"> Formulário </h2>
    
      <hr class="my-0">
      <div class="card-body">
        <form action="{{ route('pet.salvar') }}" enctype="multipart/form-data" method="post" class="needs-validation" novalidate>
            @csrf
            <div class="row">
            <div class="mb-3 col-md-6">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite o nome" value="{{ old('nome') }}" required>
            </div>
            @error('nome')
            <div class="alert alert-danger">Erro ao atualizar o Nome</div>
            @enderror

            <div class="mb-3 col-md-6">
                <label for="castrado">Castrado</label>
                <input type="text" name="castrado" class="form-control" id="castrado" placeholder="Digite o dado" value="{{ old('castrado') }}" required>
            </div>
            @error('castrado')
            <div class="alert alert-danger">Erro ao atualizar dado</div>
            @enderror

            <div class="mb-3 col-md-6">
                <label for="vacinado">Vacinado</label>
                <input type="text" name="vacinado" class="form-control" id="vacinado" placeholder="Digite o dado" value="{{ old('vacinado') }}" required>
            </div>
            @error('vacinado')
            <div class="alert alert-danger">Erro ao atualizar dado</div>
            @enderror

            <div class="mb-3 col-md-6">
                <label for="cor">Cor</label>
                <input type="text" name="cor" class="form-control" id="cor" placeholder="Digite a cor" value="{{ old('cor') }}" required>
            </div>
            @error('cor')
            <div class="alert alert-danger">Erro ao atualizar a cor</div>
            @enderror

            <div class="mb-3 col-md-6">
                <label for="idade">Idade</label>
                <input type="number" name="idade" class="form-control" id="idade" placeholder="Digite a Idade" value="{{ old('idade') }}" required>
            </div>
            @error('idade')
            <div class="alert alert-danger">Erro ao atualizar a Idade</div>
            @enderror

            <div class="mb-3 col-md-6">
                <label for="tamanho">Tamanho</label>
                <input type="text" name="tamanho" class="form-control" id="tamanho" placeholder="Selecione o Tamanho" value="{{ old('tamanho') }}" required>
            </div>
            @error('tamanho')
            <div class="alert alert-danger">Erro ao atualizar o tamanho</div>
            @enderror

            <div class="mb-3 col-md-6">
                <label for="genero">Gênero</label>
                <input type="text" name="genero" class="form-control" id="genero" placeholder="Digite o Gênero" value="{{ old('genero') }}" required>
            </div>
            @error('genero')
            <div class="alert alert-danger">Erro ao atualizar o Gênero</div>
            @enderror

            <div class="mb-3 col-md-6">
                <label for="peso">Peso</label>
                <input type="number" name="peso" class="form-control" id="peso" placeholder="Digite o Peso" value="{{ old('peso') }}" required>
            </div>
            @error('peso')
            <div class="alert alert-danger">Erro ao atualizar o Peso</div>
            @enderror

            <div class="mb-3 col-md-6">
                <label for="descricao">Descrição</label>
                <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Digite a Descrição" value="{{ old('descricao') }}" required>
            </div>
            @error('descricao')
            <div class="alert alert-danger">Erro ao atualizar a Descrição</div>
            @enderror

            <div class="mb-3 col-md-6">
                <label for="imagem">Imagem</label>
                <input type="file" name="imagem" class="form-control" id="imagem" required>
            </div>
            @error('imagem')
            <div class="alert alert-danger">Erro ao atualizar a imagem</div>
            @enderror
            <div class="centro margin-form">
                <button type="submit" class="btn center aligned btn-primary ui button">Enviar</button>
            </div>
        </form>
    </div>
</div>
@else
<div class="space">
    <div class="ui container huge">
        <h1 class="ui center aligned header"> Você precisa ser um usuário administrador par acessar essa página.</h1>
    </div>
</div>
@endif
@endsection

<style>
    .centro {
      text-align: center;
    }
    div .form-group{
        margin: 10px;
    }
    .form-group label{
        margin-bottom: 6px;
    }
</style>