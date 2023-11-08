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
    <h2 class="ui center aligned header center" style="margin-top: 30px;"> Formulário de Interesse - {{ $pet -> nome }}</h2>
    <img  class="center d-block rounded" style="width: 250px;" src="{{asset('storage/'.$pet->imagem)}}">
      <hr class="my-0">
      <div class="card-body">
        <form action="{{ route('formulario.salvar') }}" enctype="multipart/form-data" method="post" class="needs-validation" novalidate>
            @csrf
            <div class="row" >
                <input type="hidden" name="id_pet" id="id_pet"  value="{{ $pet->id }}" >
            <div class="mb-3 col-md-6">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite o nome"required>
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
                <select class="form-control" name="teve_pet" id="teve_pet" value="{{ old('teve_pet') }}" required>
                    <option value="">Selecione...</option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
            @error('teve_pet')
            <div class="alert alert-danger">Erro ao atualizar o dado</div>
            @enderror

            <div class="mb-3 col-md-6">
                <label for="possui_animal">Possui animal em casa? Se sim, qual/quais?</label>
                <input type="text" name="possui_animal" class="form-control" id="possui_animal" placeholder="Digite os dados" value="{{ old('possui_animal') }}" required>
            </div>
            @error('possui_animal')
            <div class="alert alert-danger">Erro ao atualizar o dado</div>
            @enderror
            
            <div class="mb-3 col-md-6">
                <label for="possui_espaco">Possui espaço aberto para seu pet correr e brincar?</label>
                <select class="form-control" name="possui_espaco" id="possui_espaco" value="{{ old('possui_espaco') }}" required>
                    <option value="">Selecione...</option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
            @error('possui_espaco')
            <div class="alert alert-danger">Erro ao atualizar o dado</div>
            @enderror

            <div class="mb-3 col-md-6">
                <label for="ficara_sozinho">O pet ficará sozinho por longos períodos de tempo?</label>
                <select class="form-control" name="ficara_sozinho" id="ficara_sozinho" value="{{ old('ficara_sozinho') }}" required>
                    <option value="">Selecione...</option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
            @error('ficara_sozinho')
            <div class="alert alert-danger">Erro ao atualizar os dados</div>
            @enderror

            <div class="mb-3 col-md-6">
                <label for="alergias">Alguém na família tem alergias que tornariam impossíveis adotar um animal?</label>
                <select class="form-control" name="alergias" id="alergias" value="{{ old('alergias') }}" required>
                    <option value="">Selecione...</option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
            @error('alergias')
            <div class="alert alert-danger">Erro ao atualizar os dados</div>
            @enderror
            
            <div class="mb-3 col-md-6">
                <label for="comprometimento_saude">Compromete-se a vacinar e zelar pela saúde de seu pet?</label>
                <select class="form-control" name="comprometimento_saude" id="comprometimento_saude" value="{{ old('comprometimento_saude') }}" required>
                    <option value="">Selecione...</option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
            @error('comprometimento_saude')
            <div class="alert alert-danger">Erro ao atualizar os dados</div>
            @enderror

            <div class="center margin-form">
                <button type="submit" class="btn center aligned btn-primary ui button">Enviar</button>
            </div>
        </form>
    </div>
</div>
@endsection