@php
$isMenu = false;
$navbarHideToggle = false;
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Sobre')

@section('content')

<div class="layout-demo-wrapper">
<div class="row">
  <div class="col">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" style="margin-bottom: 40px;">
      <ol class="carousel-indicators">
        <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{asset('assets/img/elements/banner-4.png')}}" alt="First slide" />
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('assets/img/elements/banner-3.png')}}" alt="Second slide" />
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('assets/img/elements/banner-2.png')}}" alt="Third slide" />
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
  <div class="col-md">
    <h4>Conheça o Help Petz</h4>
        Nós fazemos a conexão entre quem deseja adotar um pet com uma rede ONGs e protetores parceiros.
        Funciona assim: o site disponibiliza o espaço dedicado à adoção no centro de suas lojas e as ONGs/protetores parceiros ficam responsáveis pelo processo e entrevista com os potenciais donos. 
        Juntos somos mais fortes!
  </div>
</div>
<h6 class="pb-1 mb-4">Aqui você pode encontrar: <h6>
<div style="text-align: center">
  <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
    <div class="col">
      <div class="card h-100">
        <img class="card-img-top" src="{{asset('assets/img/elements/dog.png')}}"/>
        <div class="card-body">
          <h5 class="card-title">Cachorrinhos</h5>
          <p class="card-text" style="font-weight: lighter;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img class="card-img-top" src="{{asset('assets/img/elements/cat.png')}}"/>
        <div class="card-body">
          <h5 class="card-title">Gatinhos</h5>
          <p class="card-text" style="font-weight: lighter;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img class="card-img-top" src="{{asset('assets/img/elements/pig.png')}}"/>
        <div class="card-body">
          <h5 class="card-title">Porquinhos</h5>
          <p class="card-text" style="font-weight: lighter;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div style="text-align: center">
  <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
    <div class="col">
      <div class="card h-100">
        <img class="card-img-top" src="{{asset('assets/img/elements/calopsita.png')}}"/>
        <div class="card-body">
          <h5 class="card-title">Calopsitas</h5>
          <p class="card-text" style="font-weight: lighter;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img class="card-img-top" src="{{asset('assets/img/elements/india.png')}}"/>
        <div class="card-body">
          <h5 class="card-title">Porquinhos da India</h5>
          <p class="card-text" style="font-weight: lighter;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img class="card-img-top" src="{{asset('assets/img/elements/hamster.png')}}"/>
        <div class="card-body">
          <h5 class="card-title">Hamsters</h5>
          <p class="card-text" style="font-weight: lighter;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<h5>E muito mais! <h5>
<h6 class="pb-1 mb-4">Estão todos esperando por muito amor e carinho! <h6>

@endsection
