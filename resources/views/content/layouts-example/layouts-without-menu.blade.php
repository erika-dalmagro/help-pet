@php
$isMenu = false;
$navbarHideToggle = false;
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Without menu - Layouts')

@section('content')

<!-- Layout Demo -->
<div class="layout-demo-wrapper">
 

  <!-- Bootstrap carousel -->

  
<div class="row">
  <!-- Bootstrap carousel -->
  <div class="col">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" style="margin-bottom: 40px;">
      <ol class="carousel-indicators">
        <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{asset('assets/img/elements/banner-2.png')}}" alt="First slide" />
          <div class="carousel-caption d-none d-md-block">
            <h3>First slide</h3>
            <p>Eos mutat malis maluisset et, agam ancillae quo te, in vim congue pertinacia.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('assets/img/elements/banner-2.png')}}" alt="Second slide" />
          <div class="carousel-caption d-none d-md-block">
            <h3>Second slide</h3>
            <p>In numquam omittam sea.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('assets/img/elements/banner-2.png')}}" alt="Third slide" />
          <div class="carousel-caption d-none d-md-block">
            <h3>Third slide</h3>
            <p>Lorem ipsum dolor sit amet, virtute consequat ea qui, minim graeco mel no.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
  </div>
</div>


<div class="row"  style="margin-bottom: 40px; text-align: center;">
  <!-- Bootstrap carousel -->
  <div class="col-md">
    <h4>Conheça o Adote Petz</h4>
    
        Nós fazemos a conexão entre quem deseja adotar um pet com uma rede de mais de 131 ONGs e protetores parceiros.
        Funciona assim: a Petz disponibiliza espaços especialmente dedicados para a adoção no centro de suas lojas e as ONGs/protetores parceiros ficam responsáveis pelo processo e entrevista com os potenciais adotantes. Juntos somos mais fortes!

  </div>
</div>

<h6 class="pb-1 mb-4 text-muted">Um pouco mais....</h6>
<div class="card-group mb-5">
  <div class="card">
    <img class="card-img-top" src="{{asset('assets/img/elements/dog.png')}}" alt="Card image cap" />
    <div class="card-body">
      <h5 class="card-title">Cachorrinhos</h5>
      <p class="card-text">
        This is a wider card with supporting text below as a natural lead-in to additional content. This content is a
        little
        bit longer.
      </p>
    </div>
    <div class="card-footer">
      
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{asset('assets/img/elements/pig.png')}}" alt="Card image cap" />
    <div class="card-body">
      <h5 class="card-title">Porquinhos</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{asset('assets/img/elements/cat.png')}}" alt="Card image cap" />
    <div class="card-body">
      <h5 class="card-title">Gatinhos</h5>
      <p class="card-text">
        This is a wider card with supporting text below as a natural lead-in to additional content. This card has even
        longer
        content than the first to show that equal height action.
      </p>
    </div>
    <div class="card-footer">
      
    </div>
  </div>
</div>

<!--/ Layout Demo -->

@endsection
