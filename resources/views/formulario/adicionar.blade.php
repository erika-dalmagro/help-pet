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

<div class="space"></div>
<div class="row">
  <div class="col-md-12">
    <div class="card mb-4">
    <h2 class="ui center aligned header centro" style="margin-top: 30px;"> Formulário de Interesse - {{ $pet -> nome }}</h2>
    <img  class="center d-block rounded" style="width: 250px;" src="{{asset('storage/'.$pet->imagem)}}">
      <hr class="my-0">
      <div class="card-body">
        <form action="{{ route('formulario.salvar') }}" enctype="multipart/form-data" method="post" class="needs-validation" novalidate>
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
                <label for="documento">Documento</label>
                <input type="number" name="documento" class="form-control" id="documento" placeholder="Digite o Documento" value="{{ old('documento') }}" required>
            </div>
            @error('documento')
            <div class="alert alert-danger">Erro ao atualizar o Documento</div>
            @enderror

            <div class="mb-3 col-md-6">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Digite o telefone" value="{{ old('telefone') }}" required>
            </div>
            @error('telefone')
            <div class="alert alert-danger">Erro ao atualizar telefone</div>
            @enderror

            <div class="mb-3 col-md-6">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Digite o email" value="{{ old('email') }}" required>
            </div>
            @error('email')
            <div class="alert alert-danger">Erro ao atualizar o email</div>
            @enderror

            <div class="mb-3 col-md-6">
                <label for="teve_pet">Já teve algum animal antes?</label>
                <input type="text" name="teve_pet" class="form-control" id="teve_pet" placeholder="Selecione" value="{{ old('teve_pet') }}" required>
            </div>
            @error('teve_pet')
            <div class="alert alert-danger">Erro ao atualizar o dado</div>
            @enderror

            <div class="mb-3 col-md-6">
                <label for="possui_animal">Possui animal em casa? Se sim, qual/quais?</label>
                <input type="number" name="possui_animal" class="form-control" id="possui_animal" placeholder="Digite os dados" value="{{ old('possui_animal') }}" required>
            </div>
            @error('possui_animal')
            <div class="alert alert-danger">Erro ao atualizar o dado</div>
            @enderror
            
            <div class="mb-3 col-md-6">
                <label for="possui_espaco">Possui espaço aberto para seu pet correr e brincar?</label>
                <input type="text" name="possui_espaco" class="form-control" id="possui_espaco" placeholder="Digite os dados" value="{{ old('possui_espaco') }}" required>
            </div>
            @error('possui_espaco')
            <div class="alert alert-danger">Erro ao atualizar o dado</div>
            @enderror

            <div class="mb-3 col-md-6">
                <label for="ficara_sozinho">O pet ficará sozinho por longos períodos de tempo?</label>
                <input type="text" name="ficara_sozinho" class="form-control" id="ficara_sozinho" placeholder="Digite os dados" value="{{ old('ficara_sozinho') }}" required>
            </div>
            @error('ficara_sozinho')
            <div class="alert alert-danger">Erro ao atualizar os dados</div>
            @enderror

            <div class="mb-3 col-md-6">
                <label for="alergias">Alguém na família tem alergias que tornariam impossíveis adotar um animal?</label>
                <input type="text" name="alergias" class="form-control" id="alergias" placeholder="Digite os dados" value="{{ old('alergias') }}" required>
            </div>
            @error('alergias')
            <div class="alert alert-danger">Erro ao atualizar os dados</div>
            @enderror
            
            <div class="mb-3 col-md-6">
                <label for="comprometimento_saude">Compromete-se a vacinar e zelar pela saúde de seu pet?</label>
                <input type="text" name="comprometimento_saude" class="form-control" id="comprometimento_saude" placeholder="Digite os dados" value="{{ old('comprometimento_saude') }}" required>
            </div>
            @error('comprometimento_saude')
            <div class="alert alert-danger">Erro ao atualizar os dados</div>
            @enderror

            <div class="centro margin-form">
                <button type="submit" class="btn center aligned btn-primary ui button">Enviar</button>
            </div>
        </form>
    </div>
</div>

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

    .center {
        text-align: center;
    }

    img.center {
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        margin-bottom: 14px;
    }
</style>