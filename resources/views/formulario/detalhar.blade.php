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
    <h3 class="ui center aligned header">  Formulário de Adoção  </h3>
    <img  class="center d-block rounded" style="width: 250px;" src="{{asset('storage/'.$pet->imagem)}}">
    <div class="row" style="margin-bottom: 40px; text-align: center;">
        <div class="col-md">
            <h5 style="margin-bottom: 40px;">{{ $pet -> nome }}</h5>
            <div class="col-md" style="margin-right:100px; margin-left:100px;">
            <div class="row">
                 <div class="col-sm-6 col-lg-3 mb-3">
                    <div class="card p-3 text-end">
                    <figure class="mb-0">
                        <blockquote class="blockquote">
                        <p>{{ $formulario -> nome }}</p>
                        </blockquote>
                        <figcaption class="blockquote-footer mb-0 text-muted">
                        Interessado
                        </figcaption>
                    </figure>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-3">
                    <div class="card p-3 text-end">
                    <figure class="mb-0">
                        <blockquote class="blockquote">
                        <p>{{ $formulario -> documento }}</p>
                        </blockquote>
                        <figcaption class="blockquote-footer mb-0 text-muted">
                        Documento
                        </figcaption>
                    </figure>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-3">
                    <div class="card p-3 text-end">
                    <figure class="mb-0">
                        <blockquote class="blockquote">
                        <p>{{ $formulario -> email }}</p>
                        </blockquote>
                        <figcaption class="blockquote-footer mb-0 text-muted">
                        E-mail
                        </figcaption>
                    </figure>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-3">
                    <div class="card p-3 text-end">
                    <figure class="mb-0">
                        <blockquote class="blockquote">
                        <p>{{ $formulario -> telefone }}</p>
                        </blockquote>
                        <figcaption class="blockquote-footer mb-0 text-muted">
                        Telefone
                        </figcaption>
                    </figure>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="ui container">
        <table class="table ui celled center aligned">
            <thead>
                <tr>
                    <th> Já teve Pet? </th>
                    <th> Possui algum animal? </th>
                    <th> Possui espaço? </th>
                    <th> Ficará sozinho? </th>
                    <th> Alergias </th>
                    <th> Compromete-se com a saúde do pet </th>
                    <th> Status </th>
                    @if(request()->session()->get('usuario'))
                        <th> Aprovar? </th>
                    @endif
                </tr>
            <tbody>
                <tr>
                    <td> {{ $formulario -> teve_pet == 1 ? 'Sim' : 'Não'}} </td>
                    <td> {{ $formulario->possui_animal }} </td>
                    <td> {{ $formulario -> possui_espaco ? 'Sim' : 'Não'}} </td>
                    <td> {{ $formulario -> ficara_sozinho ? 'Sim' : 'Não'}} </td>
                    <td> {{ $formulario -> alergias ? 'Sim' : 'Não'}} </td>
                    <td> {{ $formulario -> comprometimento_saude ? 'Sim' : 'Não'}} </td>
                    <td> 
                        @if($formulario->avaliacao === null)
                            <span class="badge bg-label-primary me-1">Aguardando Avaliação</span>
                        @elseif($formulario->avaliacao === 1)
                            <span class="badge bg-label-success me-1">Aprovado</span>
                        @else
                            <span class="badge bg-label-danger me-1">Reprovado</span>
                        @endif 
                    </td>
                    @if(request()->session()->get('usuario'))
                    <td>
                        <a class="btn btn-outline-primary button" onclick="return confirm('Tem certeza que deseja aprovar?')" href="{{ route('formulario.aprovar', $formulario->id) }}">
                        <i class="fa-regular fa-thumbs-up"></i>
                        </a>
                        <a class="btn btn-primary button" onclick="return confirm('Tem certeza que deseja reprovar?')" href="{{ route('formulario.reprovar', $formulario->id) }}">
                        <i class="fa-regular fa-thumbs-down"></i>
                        </a>
                    </td>
                    @endif
                </tr>
            </tbody>
        </table>
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