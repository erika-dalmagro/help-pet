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
@if(Session::get('usuario'))
    <h4 class="fw-bold py-3 mb-4">Formulários de Adoção</h4>
    <h5 class="pb-1 mb-4">Aqui você pode ter uma visão completa de todos os formulários enviados.</h5>
    
    <form method="get" action="{{ route('formulario.index') }}">
        <label for="avaliacao" class="filter-label">Filtrar por Status:</label>
        <select name="avaliacao" id="avaliacao">
            <option value="">Todos</option>
            <option value="1" @if ($selectedStatus == 1) selected @endif>Aguardando Avaliação</option>
            <option value="2" @if ($selectedStatus == 2) selected @endif>Aprovado</option>
            <option value="3" @if ($selectedStatus == 3) selected @endif>Reprovado</option>
        </select>
        <button class="btn btn-primary ui button" type="submit">Filtrar</button>
    </form>
</div>

<div class="card">
    <h5 class="card-header">Formulários</h5>
    <div class="table-responsive text-nowrap">
      @if($formulario->count() > 0)
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
                @foreach ($formulario as $formulario)
                <tr>
                    <td><strong>{{ $formulario->nome }}</strong></td>
                    <td>{{ $formulario->email }}</td>
                    <td>{{ $formulario->telefone }}</td>
                    <td>
                        @if($formulario->avaliacao === 1)
                        <span class="badge bg-label-primary me-1">Aguardando Avaliação</span>
                        @elseif($formulario->avaliacao === 2)
                        <span class="badge bg-label-success me-1">Aprovado</span>
                        @else
                        <span class="badge bg-label-danger me-1">Reprovado</span>
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-outline-primary ui button" href="{{ route('formulario.detalhar', $formulario->id) }}">
                            <i class="fa-regular fa-eye"></i>
                        </a>
                        <a class="btn btn-outline-primary ui button" onclick="return confirm('Tem certeza que deseja excluir esse formulário?')" href="{{ route('formulario.excluir', $formulario->id) }}">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
                @else
                <h3 class="ui center aligned header">Nenhum formulário encontrado!</h3>
                <br>
                <br>
                @endif
            </tbody>
        </table>
        @else
          <div class="space">
            <div class="ui container huge">
              <h2 class="ui center aligned header"> Você precisa ser um usuário administrador par acessar essa página.</h2>
            </div>
          </div>
        @endif
    </div>
</div>
@endsection

<style>
  .center {
      text-align: center;
  }

  .filter-label {
      font-weight: bold;
  }
</style>
