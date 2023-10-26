@php
$isMenu = false;
$navbarHideToggle = false;
@endphp
@extends('layouts/contentNavbarLayout')

@section('title', 'Listagem de Formularios')

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/masonry/masonry.js')}}"></script>
@endsection

@section('content')
<div class="center">
   <h4 class="fw-bold py-3 mb-4">Formulários de Adoção</h4>
   <h5 class="pb-1 mb-4">Aqui você pode ter uma visão completa de todos os formulários enviados.</h5>
</div>

<!-- Striped Rows -->
<div class="card">
  <h5 class="card-header">Formulários</h5>
  <div class="table-responsive text-nowrap">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Interessado</th>
          <th>E-mail</th>
          <th>Telefone</th>
          <th>Status</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
      @if($formulario->count() > 0)
        @foreach ($formulario as $formulario)
        <tr>
          <td><strong> {{ $formulario->nome }} </strong></td>
          <td> {{ $formulario->email }} </td>
          <td> {{ $formulario->telefone }} </td>
          <td>
          @if($formulario->avaliado === null)
            <span class="badge bg-label-primary me-1">Aguardando Avaliação</span>
          @elseif($formulario->avaliado === 1)
            <span class="badge bg-label-success me-1">Aprovado</span>
          @else
            <span class="badge bg-label-danger me-1">Reprovado</span>
          @endif
          </td>
          <td>
            <a class="btn btn-outline-primary ui button" href="{{ route('formulario.detalhar', $formulario->id) }}">
                <i class="fa-regular fa-eye"></i>
            </a>
            <a class="btn btn-outline-primary ui button"  onclick="return confirm('Tem certeza que deseja excluir esse formulário?')" href="{{ route('formulario.excluir', $formulario->id) }}">
                <i class="fa-solid fa-trash"></i>
            </a>       
          </td>
        </tr>
        @endforeach
    @else
    <h3 class="ui center aligned header"> Nenhum formulário cadastrado!</h3>
    @endif
      </tbody>
    </table>
  </div>
</div>
<!--/ Striped Rows -->
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
</style>