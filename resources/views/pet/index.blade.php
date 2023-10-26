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
   <h4 class="fw-bold py-3 mb-4">Disponíveis para Adoção</h4>
   <h5 class="pb-1 mb-4">Aqui você pode ter uma visão completa de todos animaizinhos esperando por um lar.</h5>
</div>
<div class="space grid-container center">
      @if($pet->count() > 0)
         @foreach ($pet as $pet)
         <div class="card" >
            <img class="align-photo" src="{{asset('storage/'.$pet->imagem)}}">
            <div class="card-body">
               <h5 class="card-title"><b>{{ $pet->nome }}</b>, {{ $pet->genero }} </h5>
               <div class="centro" style="display: inline-block;">
                  <a href="/pet/detalhes/{{$pet->id}}" class="btn btn-primary">Mais informações</a>
               </div>
               <div class="centro" style="display: inline-block; margin-top: 10px;">
                  @if(Session::get('usuario'))
                     <a class="btn btn-outline-primary ui button" href="{{ route('pet.editar', $pet->id) }}">
                        <i class="fa-regular fa-pen-to-square"></i>
                     </a>
                     <a class="btn btn-outline-primary ui button" href="{{ route('pet.excluir', $pet->id) }}">
                        <i class="fa-solid fa-trash"></i>
                     </a>                     
                     @endif
               </div>
            </div>
         </div>
         @endforeach
      @else
      <h3 class="ui center aligned header"> Nenhum pet cadastrado!</h3>
      @endif
      <br>
</div>
@endsection
<style>
   .grid-container {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr 1fr;
      gap: 30px;
   }

   .center {
      text-align: center;
   }

   .align-photo {
      align-self: center;
      width: 220px;
      height: 160px;
      position: relative;
      top: 20px;
      margin-bottom: 10px;
   }
</style>