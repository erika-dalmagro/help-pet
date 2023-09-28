@php
$isMenu = false;
$navbarHideToggle = false;
@endphp
@extends('layouts/contentNavbarLayout')

@section('title', 'Cards basic   - UI elements')

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/masonry/masonry.js')}}"></script>
@endsection

@section('content')
<div class="space">
    <div class="ui container huge">
        <h1 class="ui center aligned header"> Cadastro de Pets </h1>
        <div class="ul list-group fonte">
            <form enctype="multipart/form-data" action="{{ route('pet.salvar') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" class="form-control @error('nome') is-invalid @enderror" id="nome" placeholder="Digite o Nome" value="{{ old('nome') }}" required>
                </div>
                @error('nome')
                <div class="alert alert-danger">Erro ao cadastrar Nome</div>
                @enderror

                <div class="form-group">
                    <label for="cor">Cor</label>
                    <input type="text" name="cor" class="form-control @error('cor') is-invalid @enderror" id="Cor" placeholder="Digite a Cor" value="{{ old('cor') }}" required>
                </div>
                @error('cor')
                <div class="alert alert-danger">Erro ao cadastrar Cor</div>
                @enderror

                <div class="form-group">
                    <label for="idade">Idade</label>
                    <input type="number" name="idade" class="form-control @error('idade') is-invalid @enderror" id="Idade" placeholder="Digite a Idade" value="{{ old('idade') }}" required>
                </div>
                @error('idade')
                <div class="alert alert-danger">Erro ao cadastrar idade</div>
                @enderror

                <div class="form-group">
                    <label for="idade">Gênero</label>
                    <input type="text" name="genero" class="form-control @error('genero') is-invalid @enderror" id="genero" placeholder="Digite o Gênero" value="{{ old('genero') }}" required>
                </div>
                @error('idade')
                <div class="alert alert-danger">Erro ao cadastrar idade</div>
                @enderror

                <div class="form-group">
                    <label for="peso">Peso</label>
                    <input type="number" name="peso" class="form-control @error('peso') is-invalid @enderror" id="peso" placeholder="Digite o Peso" value="{{ old('peso') }}" required>
                </div>
                @error('peso')
                <div class="alert alert-danger">Erro ao cadastrar peso</div>
                @enderror
                
                <div class="form-group">
                    <label for="email">Descrição</label>
                    <input type="text" name="descricao" class="form-control @error('descricao') is-invalid @enderror" id="descricao" placeholder="Digite a descrição" value="{{ old('descricao') }}" required>
                </div>
                @error('descricao')
                <div class="alert alert-danger">Erro ao cadastrar Descrição</div>
                @enderror

                <div class="form-group">
                    <label for="imagem">Imagem</label>
                    <input type="file" name="imagem" class="form-control" id="imagem" required>
                </div>
                @error('imagem')
                <div class="alert alert-danger">Erro ao cadastrar Imagem</div>
                @enderror




                <button style="margin-top:10px;" type="submit" class="btn center aligned btn-outline-primary ui button">Enviar</button>
            </form>
        </div>
    </div>
</div>

@endsection