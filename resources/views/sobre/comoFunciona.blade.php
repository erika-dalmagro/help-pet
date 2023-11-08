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
<div class="center">
   <h4 class="fw-bold py-3 mb-4">Como funciona a Adoção Responsável?</h4>
   <h5 class="pb-1 mb-4">Aqui você pode ter uma visão completa das etapas de adoção de seu novo animalzinho.</h5>
</div>
<div class="space grid-container center">
  <div class="card" >
    <img class="align-photo" src="{{asset('assets/img/elements/passo1.png')}}">
    <div class="card-body">
      <h5 class="card-title">1°: Encontre seu pet</h5>
      <p class="card-text">
        Veja nossa lista de animais disponíveis. 
        Lá você irá conhecer todos pets disponíveis e encontrar seu mais novo bichinho. Confira a lista de ONGs aqui:
      </p>
      <div class="center">
          <a href="/ongs/" class="btn btn-primary">ONGs</a>
      </div>
    </div>
  </div>
  <div class="card" >
    <img class="align-photo"src="{{asset('assets/img/elements/passo2.png')}}">
    <div class="card-body">
      <h5 class="card-title">2°: Formulário de Interesse</h5>
      <p class="card-text">
        Depois de escolher, basta preencher o formulário de interesse. Ele será avaliado e, se aprovado, 
        a ONG/protetor entrará em contato com você. 
        <br>
        <b>Lembre-se: a adoção é responsável!</b> 
        Esteja comprometido com todos os cuidados necessários.
      </p>
    </div>
  </div>
  <div class="card" >
    <img class="align-photo" src="{{asset('assets/img/elements/passo3.png')}}">
    <div class="card-body">
      <h5 class="card-title">3°: Avaliação da adoção</h5>
      <p class="card-text">
       A ONG/protetor parceiro irá fazer a análise de perfil do adotante vs pet escolhido. Preenchendo os requisitos, você recebe a aprovação por telefone ou e-mail</a>
      </p>
    </div>
  </div>
  <div class="card" >
    <img class="align-photo" src="{{asset('assets/img/elements/passo4.png')}}">
    <div class="card-body">
      <h5 class="card-title">4°: Adoção Completa</h5>
      <p class="card-text">
        Caso seja aprovado, é só esperar o contato! Com tudo certo, você pode buscar seu pet em uma das ONGS no dia combinado. Simples assim!
      </p>
    </div>
  </div>
</div>
@endsection