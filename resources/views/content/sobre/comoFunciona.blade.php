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
      <h5 class="card-title">1°: Ache seu pet</h5>
      <p class="card-text">
        Visite, entre em contato com ONGs/protetores ou veja nossa lista de animais disponíveis. Lá você irá conhecer todos pets disponíveis e criar uma conexão perfeita com seu novo bichinho em busca de um novo lar. Confira a lista de ONGs aqui:
      </p>
      <div class="centro">
          <a href="/ongs/" class="btn btn-primary">ONGs</a>
      </div>
    </div>
  </div>
  <div class="card" >
    <img class="align-photo"src="{{asset('assets/img/elements/passo2.png')}}">
    <div class="card-body">
      <h5 class="card-title">2°: Formulário de Interesse</h5>
      <p class="card-text">
        Se for até uma ONG, faça a entrevista na hora com um voluntário da ONG/protetor. Caso não de, não tem problema, basta preencher o formulário de interesse que disponibilizamos <a href="">aqui</a>. Ele será avaliado e a ONG/protetor entrará em contato com você.
      </p>
    </div>
  </div>
  <div class="card" >
    <img class="align-photo" src="{{asset('assets/img/elements/passo3.png')}}">
    <div class="card-body">
      <h5 class="card-title">3°: Avaliação da adoção</h5>
      <p class="card-text">
       A ONG/protetor parceiro irá fazer a análise de perfil do adotante vs pet escolhido. Preenchendo os requisitos, você recebe a aprovação na hora (quando realizada entrevista na loja pelo voluntário da ONG/protetor) ou por telefone / e-mail caso seja preenchido o <a href="">formulário online</a>
      </p>
    </div>
  </div>
  <div class="card" >
    <img class="align-photo" src="{{asset('assets/img/elements/passo4.png')}}">
    <div class="card-body">
      <h5 class="card-title">4°: Adoção Completa</h5>
      <p class="card-text">
        Caso seja aprovado na hora pelo voluntário da ONG/protetor, você já pode levar seu pet para casa! Se enviou o formulário online, espere o contato e a aprovação. Com tudo certo, você busca seu pet em uma das ONGS no dia combinado. Simples assim!
      </p>
    </div>
  </div>
</div>
@endsection
<style>
   .grid-container {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr 1fr;
      gap: 14px;
   }

   .center {
      text-align: center;
   }

   .align-photo {
      align-self: center;
      width: 150px;
      height: 150px;
      position: relative;
      top: 20px;
      margin-bottom: 10px;
   }
</style>