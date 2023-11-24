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
    <h2 class="ui center aligned header center" style="margin-top: 30px;"> Formulário Pet</h2>
    
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
                <label for="tipo">Selecione o tipo do animal</label>
                <select class="form-control" name="tipo" id="tipo" value="{{ old('tipo') }}" required>
                    <option value="">Selecione...</option>
                    <option value="1">Cachorro</option>
                    <option value="2">Gato</option>
                    <option value="3">Roedor</option>
                    <option value="4">Outro</option>
                </select>
            </div>
            @error('tipo')
            <div class="alert alert-danger">Erro ao atualizar os dados</div>
            @enderror

            <div class="mb-3 col-md-6">
                <label for="castrado">Castrado?</label>
                <select class="form-control" name="castrado" id="castrado" value="{{ old('castrado') }}" required>
                    <option value="">Selecione...</option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
            @error('castrado')
            <div class="alert alert-danger">Erro ao atualizar o dado</div>
            @enderror

            <div class="mb-3 col-md-6">
                <label for="vacinado">Vacinado?</label>
                <select class="form-control" name="vacinado" id="vacinado" value="{{ old('vacinado') }}" required>
                    <option value="">Selecione...</option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
            @error('vacinado')
            <div class="alert alert-danger">Erro ao atualizar o dado</div>
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
                <select class="form-control" name="tamanho" id="tamanho" value="{{ old('tamanho') }}" required>
                    <option value="">Selecione...</option>
                    <option value="PP">PP</option>
                    <option value="P">P</option>
                    <option value="M">M</option>
                    <option value="G">G</option>
                    <option value="GG">GG</option>
                </select>
            </div>
            @error('tamanho')
            <div class="alert alert-danger">Erro ao atualizar o dado</div>
            @enderror

            <div class="mb-3 col-md-6">
                <label for="genero">Gênero</label>
                <select class="form-control" name="genero" id="genero" value="{{ old('genero') }}" required>
                    <option value="">Selecione...</option>
                    <option value="Fêmea">Fêmea</option>
                    <option value="Macho">Macho</option>
                </select>
            </div>
            @error('genero')
            <div class="alert alert-danger">Erro ao atualizar o dado</div>
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
            <div class="center margin-form">
                <button type="submit" class="btn center aligned btn-primary ui button">Enviar</button>
            </div>
        </form>
    </div>
</div>
@else
<div class="space">
    <div class="ui container huge">
        <h2 class="ui center aligned header"> Você precisa ser um usuário administrador par acessar essa página.</h2>
    </div>
</div>
@endif
@endsection