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
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">ONGS/</span> Parceiras</h4>



<!-- Horizontal -->
<h5 class="pb-1 mb-4">Aqui você pode ter uma visão das ONG apoiadoras do projeto.</h5>
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
            <a href="javascript:void(0)" class="btn btn-primary">Entre em contato</a>
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
            Serviço de urgência e emergência para animais vítimas de maus tratos ou atropelamentos. 
            Os animais resgatados passam por tratamento veterinário através do trabalho de duas médicas veterinárias, e os casos mais críticos são encaminhados para clínicas conveniadas do poder público municipal.
            </p>
            <a href="javascript:void(0)" class="btn btn-primary">Entre em contato</a>
          </div>
        </div>
        <div class="col-md-4">
          <img class="card-img card-img-right" style="width: 150px; height: 150px; position: relative; top: 36px; left: 20px;"  src="{{asset('assets/img/elements/samu.png')}}" alt="Card image" />
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Horizontal -->

<!-- Horizontal -->
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
            e está habilitado para recolher animais que estejam doentes ou sejam um risco para os habitantes.
            </p>
            <a href="javascript:void(0)" class="btn btn-primary">Entre em contato</a>
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
            <a href="javascript:void(0)" class="btn btn-primary">Entre em contato</a>
          </div>
        </div>
        <div class="col-md-4">
          <img class="card-img card-img-right" style="width: 150px; height: 150px; position: relative; top: 36px; left: 20px;"  src="{{asset('assets/img/elements/apabg.png')}}" alt="Card image" />
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Horizontal -->

@endsection
