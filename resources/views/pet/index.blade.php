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
<h4 class="fw-bold py-3 mb-4">Disponíveis para Adoção</h4>

<h5 class="pb-1 mb-4">Aqui você pode ter uma visão completa de todos animaizinhos esperando por um lar.</h5>
<div class="space grid-container">
      @if($pet->count() > 0)
         @foreach ($pet as $pet)
         <!-- <div class="row -0"> -->
         <div class="card" >
               <img style="width: 150px; height: 150px; position: relative; top: 20px; left: 20px;" src="{{asset('storage/'.$pet->imagem)}}"">
               <div class="card-body">
                  <h5 class="card-title">{{ $pet->nome }}, {{ $pet->genero }} </h5>
                  <p class="card-text">
                  <!-- This is a wider card with supporting text below as a natural lead-in to additional content. This content
                  is a
                  little bit longer. -->
                  </p>
                  <a href="javascript:void(0)" class="btn btn-primary">Quero adotar!</a>
           
               </div>
            <!-- </div> -->
         </div>
         @endforeach
      @else
      <h3 class="ui center aligned header"> Nenhum pet cadastrado!</h3>
      @endif
      <br>
</div>
@endsection