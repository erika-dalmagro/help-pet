@php
$isMenu = false;
$navbarHideToggle = false;
@endphp
@extends('layouts/contentNavbarLayout')

@section('title', 'Detalhes')

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/masonry/masonry.js')}}"></script>
@endsection

@section('content')
<div class="space">
    <h2 class="ui center aligned header"> Detalhes </h2>
    <img  class="center d-block rounded" style="width: 250px;" src="{{asset('storage/'.$pet->imagem)}}">
    <div class="row"  style="margin-bottom: 40px; text-align: center;">
        <div class="col-md">
            <h4>{{ $pet -> nome }}, {{ $pet -> tamanho }}</h4>
            <div class="col-md" style="margin-right:100px; margin-left:100px;">
                {{ $pet -> descricao }}.
            </div>
        </div>
    </div>
    <div class="ui container">
        <table class="table ui celled center aligned">
            <thead>
                <tr>
                    <th> Nome </th>
                    <th> Cor </th>
                    <th> Idade </th>
                    <th> Tamanho </th>
                    <th> Vacinado </th>
                    <th> Castrado </th>
                    <th> Gênero </th>
                    <th> Peso </th>
                    @if(request()->session()->get('usuario'))
                        <th> Ações </th>
                    @endif
                </tr>
            <tbody>
                <tr>
                    <td> {{ $pet -> nome }} </td>
                    <td> {{ $pet -> cor }} </td>
                    <td> {{ $pet -> idade }} </td>
                    <td> {{ $pet -> tamanho }} </td>
                    <td> {{ $pet -> vacinado }} </td>
                    <td> {{ $pet -> castrado }} </td>
                    <td> {{ $pet -> genero }} </td>
                    <td> {{ $pet -> peso }} </td>
                    @if(request()->session()->get('usuario'))
                    <td>
                        <a class="btn btn-outline-primary button" href="{{ route('pet.editar', $pet->id) }}">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </a>
                        <a class="btn btn-primary button" onclick="return confirm('Tem certeza que deseja excluir?')" href="{{ route('pet.excluir', $pet->id) }}">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                    @endif
                </tr>
            </tbody>
        </table>
        <div class="center margin-form">
            <a class="btn btn-primary btn-lg" type="button" href="{{ route('formulario.adicionar',  $pet->id) }}">Tenho interessse!</a>
        </div>
    </div>
</div>
@endsection
<style>
.center {
 text-align: center;
}

img.center {
  margin-left: auto;
  margin-right: auto;
  width: 50%;
  margin-bottom: 14px;
}
</style>