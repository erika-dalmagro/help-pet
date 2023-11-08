@php
$isMenu = false;
$navbarHideToggle = false;
@endphp
@extends('layouts/contentNavbarLayout')

@section('title', 'Adotar')

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/masonry/masonry.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">Disponíveis para Adoção</h4>

<!-- Horizontal -->
<h5 class="pb-1 mb-4">Aqui você pode ter uma visão completa de todos animaizinhos esperando por um lar.</h5>
<div class="row mb-5">
<div class="col-md" >
  @if($pet->count() > 0) @foreach ($pet as $pet)
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-6">
          <div class="card-body">
            <h5 class="card-title">Dados do Animalzinho</h5>
            <p class="card-text">
            A APABG é uma entidade sem fins lucrativos formada por voluntários que atuam de forma anônima em defesa do bem-estar 
            dos animais. Há projetos da comunidade para convivência harmônica com os animais e a natureza.
            </p>
            <a href="https://adotar.com.br/instituicao.aspx?cod=494" class="btn btn-primary">Quero adotar!</a>
          </div>
        </div>
        <div class="col-md-6">
          <img class="card-img card-img-right" style="width: 200px; height: 200px; position: relative; top: 56px; left: 20px;"  src="{{asset('assets/img/elements/apabg.png')}}" alt="Card image" />
        </div>
      </div>
    </div>
    @endif
    @endforeach
  </div>
  <div class="col-md">
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-6">
          <div class="card-body">
            <h5 class="card-title">Dados do Animalzinho</h5>
            <p class="card-text">
            A APABG é uma entidade sem fins lucrativos formada por voluntários que atuam de forma anônima em defesa do bem-estar 
            dos animais. Há projetos da comunidade para convivência harmônica com os animais e a natureza.
            </p>
            <a href="https://adotar.com.br/instituicao.aspx?cod=494" class="btn btn-primary">Quero adotar!</a>
          </div>
        </div>
        <div class="col-md-6">
          <img class="card-img card-img-right" style="width: 200px; height: 200px; position: relative; top: 56px; left: 20px;"  src="{{asset('assets/img/elements/apabg.png')}}" alt="Card image" />
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mb-5">
<div class="col-md">
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-6">
          <div class="card-body">
            <h5 class="card-title">Dados do Animalzinho</h5>
            <p class="card-text">
            A APABG é uma entidade sem fins lucrativos formada por voluntários que atuam de forma anônima em defesa do bem-estar 
            dos animais. Há projetos da comunidade para convivência harmônica com os animais e a natureza.
            </p>
            <a href="https://adotar.com.br/instituicao.aspx?cod=494" class="btn btn-primary">Quero adotar!</a>
          </div>
        </div>
        <div class="col-md-6">
          <img class="card-img card-img-right" style="width: 200px; height: 200px; position: relative; top: 56px; left: 20px;"  src="{{asset('assets/img/elements/apabg.png')}}" alt="Card image" />
        </div>
      </div>
    </div>
  </div>
  <div class="col-md">
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-6">
          <div class="card-body">
            <h5 class="card-title">Dados do Animalzinho</h5>
            <p class="card-text">
            A APABG é uma entidade sem fins lucrativos formada por voluntários que atuam de forma anônima em defesa do bem-estar 
            dos animais. Há projetos da comunidade para convivência harmônica com os animais e a natureza.
            </p>
            <a href="https://adotar.com.br/instituicao.aspx?cod=494" class="btn btn-primary">Quero adotar!</a>
          </div>
        </div>
        <div class="col-md-6">
          <img class="card-img card-img-right" style="width: 200px; height: 200px; position: relative; top: 56px; left: 20px;"  src="{{asset('assets/img/elements/apabg.png')}}" alt="Card image" />
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
