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
<div class="row mb-5">
<div class="col-md">
<div class="space">
   <div class="ui container">
      <div class="ul list-group">
         @if($pet->count() > 0)
         <table class="table">
            <thead>
               <tr>
               <th>Imagem</th>
                  <th>Nome </th>
                  <th>Descrição</th>
                  <th>Peso</th>
                  @if(Session::get('usuario'))
                  <th>
                     <i class="fa fa-cog centralizar"></i>
                  </th>
                  @endif
               </tr>
            </thead>
            <tbody>
               @foreach ($pet as $pet)
               <tr>
               <td class="ui center aligned"><img style="width: 250px;" src="{{asset('storage/'.$pet->imagem)}}"></td>
                  <td>{{ $pet->nome }}</td>
                  <td>{{ $pet->descricao }}</td>
                  <td>{{ $pet->peso }}</td>
                  @if(Session::get('usuario'))
                  <td class="centralizar">
                     <a href="{{ route('pet.detalhar', $pet->id) }}" class="btn center aligned btn-outline-primary ui button">
                        Detalhes
                     </a>
                  </td>
                  @endif
               </tr>
               @endforeach
               @else
               <h3 class="ui center aligned header"> Nenhum pet cadastrado!</h3>
               @endif
            </tbody> 
         </table>
      </div>
      <br>
      @if(Session::get('usuario'))
      <div class="centro">
         <a class="btn btn-outline-primary ui button" href="{{ route('pet.adicionar') }}"> Cadastrar Pet</a>
      </div>
      @endif
   </div>
</div>
@endsection