@php
$isMenu = false;
$navbarHideToggle = false;
@endphp
@extends('layouts/contentNavbarLayout')

@section('title', 'Envio concluido ')

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/masonry/masonry.js')}}"></script>
@endsection

@section('content')
<div class="space">
    <h2 class="ui center aligned header"> Envio concluído  </h2>
    <div class="row"  style="margin-bottom: 40px; text-align: center;">
        <div class="col-md">
            <h4>Tudo certo por aqui!</h4>
            <div class="col-md" style="margin-right:100px; margin-left:100px;">
                <img  class="center d-block rounded" style="width: 250px;" src="{{asset('storage/concluido.png')}}">
                Agora é só esperar o retorno de um de nossos avaliacaores.
            </div>
        </div>
    </div>
    <div class="ui container">
      
        <div class="center margin-form">
            <a class="btn btn-primary btn-lg" type="button" href="{{ route('sobre') }}">Voltar para a página inicial</a>
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