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
@if($pet->count() > 0)
   <div class="space grid-container center">
      @foreach ($pet as $pet)
         <div class="card" >
            <img class="align-photo" src="{{asset('storage/'.$pet->imagem)}}">
            <div class="card-body">
               <h5 class="card-title"><b>{{ $pet->nome }}</b>, {{ $pet->genero }} </h5>
               <div class="center" style="display: inline-block;">
                  <a href="/pet/detalhes/{{$pet->id}}" class="btn btn-primary">Mais informações</a>
               </div>
               <div class="center" style="display: inline-block; margin-top: 10px;">
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
   </div>
@else
   <h3 class="center"> Nenhum pet disponível!</h3>
@endif
@endsection