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
<div class="space grid-container center">
  <div class="card" >
    <img class="align-photo" src="{{asset('assets/img/elements/passo1.png')}}">
    <div class="card-body">
      <h5 class="card-title">1°: Ache seu pet</h5>
      <p class="card-text">
        Visite ou entre em contto com ONGs/protetores. Lá você irá conhecer todos pets disponíveis para criar a conexão perfeita com cão e/ou gato que busca um novo lar. Confira a lista de ONGs aqui:
      </p>
      <div class="centro">
          <a href="/pet/detalhes/" class="btn btn-primary">ONGs</a>
      </div>
    </div>
  </div>
  <div class="card" >
    <img class="align-photo"src="{{asset('assets/img/elements/passo2.png')}}">
    <div class="card-body">
      <h5 class="card-title">2°: Formulário de Interesse</h5>
      <p class="card-text">
      Faça a entrevista na hora nas lojas com um voluntário da ONG/protetor. Caso não haja um voluntário presente, não tem problema, basta preencher o formulário de interesse que disponibilizamos <a href="">aqui</a> que a ONG/protetor entrará em contato com você em até 48h.
      </p>
    </div>
  </div>
  <div class="card" >
    <img class="align-photo" src="{{asset('assets/img/elements/passo3.png')}}">
    <div class="card-body">
      <h5 class="card-title">3°: Avaliação da adoção</h5>
      <p class="card-text">
      A ONG/protetor parceiro irá fazer a análise do cadastro e perfil do adotante vs pet escolhido. Preenchendo os requisitos, você recebe a aprovação na hora (quando a entrevista é realizada na loja pelo voluntário da ONG/protetor) ou por telefone / e-mail caso seja preenchido o <a href="">formulário online</a>
      </p>
    </div>
  </div>
  <div class="card" >
    <img class="align-photo" src="{{asset('assets/img/elements/passo4.png')}}">
    <div class="card-body">
      <h5 class="card-title">4°: Adoção Completa</h5>
      <p class="card-text">
        Caso seja aprovado na hora pelo voluntário da ONG/protetor, você já pode levar seu pet para casa! Se enviou o formulário online, espere o contato e a aprovação. Com tudo certo, você busca seu pet em uma loja Petz no dia combinado com a ONG/protetor.
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