@php
$containerNav = $containerNav ?? 'container-fluid';
$navbarDetached = ($navbarDetached ?? '');
@endphp

@if(isset($navbarDetached) && $navbarDetached == 'navbar-detached')
<nav class="layout-navbar {{$containerNav}} navbar navbar-expand-xl {{$navbarDetached}} align-items-center bg-navbar-theme" id="layout-navbar">
  @endif
  @if(isset($navbarDetached) && $navbarDetached == '')
  <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="{{$containerNav}}">
      @endif
      <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
        <a href="{{url('/')}}" class="app-brand-link gap-2">
          <span class="app-brand-logo demo">
            @include('_partials.macros',["width"=>48,"withbg"=>'#696cff'])
          </span>
          <span class="app-brand-text demo menu-text fw-bolder">{{config('variables.templateName')}}</span>
        </a>
      </div>
      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <ul class="navbar-nav flex-row align-items-center ms-auto">

        <li class="nav-item lh-1 me-3">
            <a href="/" style="font-size: 15px; margin: 1rem; color: rgb(86, 106, 127);">SOBRE</a>
          </li>
          <li class="nav-item lh-1 me-3">
            <a href="/ongs" style="font-size: 15px; margin: 1rem; color: rgb(86, 106, 127);">ONG PARCEIRAS</a>
          </li>
          <li class="nav-item lh-1 me-3">
            <a href="/como-funciona" style="font-size: 15px; margin: 1rem; color: rgb(86, 106, 127);">COMO FUNCIONA</a>
          </li>
          <!--<li class="nav-item lh-1 me-6">
              <a href="" style="font-size: 15px; margin: 1rem; color: rgb(86, 106, 127);">CONTATO</a>
          </li>-->
          <li class="nav-item lh-1 me-6">
            <a href="/quero-adotar"  style="font-size: 15px; margin: 1rem;" type="button" class="btn rounded-pill btn-outline-primary">
              QUERO ADOTAR
            </a>
          </li>
          <li class="nav-item lh-1 me-6">
            <a href="auth/login-basic" type="button" class="btn rounded-pill btn-primary" style="font-size: 15px; margin: 1rem;">
              LOGIN
            </a>
          </li>
        </ul>
      </div>
  </nav>
