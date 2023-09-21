@extends('layout')
@extends('topnav')
@section('content')
<div class="space">
   <h1 class="ui center aligned header"> Listagem de Pets </h1>
   <div class="ui container">
      <div class="ul list-group">
         @if($pet->count() > 0)
         <table class="table">
            <thead>
               <tr>
                  <th>Nome </th>
                  <th>Descrição</th>
                  <th>Peso</th>
                  <th>Imagem</th>
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
                  <td>{{ $pet->nome }}</td>
                  <td>{{ $pet->descricao }}</td>
                  <td>{{ $pet->peso }}</td>
                  <td class="ui center aligned"><img style="width: 250px;" src="{{asset('storage/'.$pet->imagem)}}"></td>
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