@php
$isMenu = false;
$navbarHideToggle = false;
@endphp
@extends('layouts/contentNavbarLayout')

@section('ONGS')

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/masonry/masonry.js')}}"></script>
@endsection

@section('content')
<div class="text-center mt-2 mb-4">
  <h4 class="fw-bold mb-4">ONGs Parceiras</h4>
  <h5 class="pb-1">Aqui você pode ter uma visão das ONG apoiadoras do projeto.</h5>
</div>
<div class="row mb-5">
  <div class="col-md">
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-4">
          <img class="card-img card-img-left" style="width: 150px; height: 150px; position: relative; top: 36px; left: 20px;" src="{{asset('assets/img/elements/logo_patas_e_focinhos.png')}}" alt="Card image" />
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">ONG Patas e Focinhos</h5>
            <p class="card-text">
             Uma das organizações mais antigas de Bento Gonçalves e trabalha diariamente no resgate e cuidado dos animais abandonados. Atualmente (07/07/2023), a entidade está com 21 cachorros e 22 gatos para adoção, entre filhotes e adultos, todos vacinados e castrados.
            </p>
            <a href="https://www.instagram.com/ongpatasfocinhos/" class="btn btn-primary">Entre em contato</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md">
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Samu Pet</h5>
            <p class="card-text">
            Serviço de urgência para animais vítimas de maus tratos ou atropelamentos. 
            Resgatados passam por tratamento veterinário através do trabalho de duas médicas veterinárias. Os casos mais críticos são encaminhados para clínicas conveniadas do poder público municipal.
            </p>
            <a href="https://wa.me/54992231853" class="btn btn-primary">Entre em contato</a>
          </div>
        </div>
        <div class="col-md-4">
          <img class="card-img card-img-right" style="width: 150px; height: 150px; position: relative; top: 36px; left: 20px;"  src="{{asset('assets/img/elements/samu.png')}}" alt="Card image" />
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mb-5">
  <div class="col-md">
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-4">
          <img class="card-img card-img-left" style="width: 150px; height: 150px; position: relative; top: 36px; left: 20px;"  src="{{asset('assets/img/elements/czz.png')}}" alt="Card image" />
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Centro de Controle de Zoonoses (CCZ) de Bento Gonçalves</h5>
            <p class="card-text">
            Órgão municipal responsável pelo controle de doenças de animais, 
            e está habilitado para recolher animais que estejam doentes ou sejam um risco para os habitantes. Telefone: (54) 99274-4262 
            </p>
            <a href="https://cliniguia.com/unidades/bento-goncalves-rs/unidade-de-vigilancia-em-saude-de-bento-goncalves-9460845/" class="btn btn-primary">Entre em contato</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md">
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">APABG - Associação Voluntária de Proteção Animal</h5>
            <p class="card-text">
            A APABG é uma entidade sem fins lucrativos formada por voluntários que atuam de forma anônima em defesa do bem-estar 
            dos animais. Há projetos da comunidade para convivência harmônica com os animais e a natureza.
            </p>
            <a href="https://adotar.com.br/instituicao.aspx?cod=494" class="btn btn-primary">Entre em contato</a>
          </div>
        </div>
        <div class="col-md-4">
          <img class="card-img card-img-right" style="width: 150px; height: 150px; position: relative; top: 36px; left: 20px;"  src="{{asset('assets/img/elements/apabg.png')}}" alt="Card image" />
        </div>
      </div>
    </div>
  </div>
</div>

@endsection