
<div class="space">
    <h1 class="ui center aligned header"> Detalhes </h1>
    <div class="ui container">
        <table class="table ui celled center aligned">
            <thead>
                <tr>
                    <th> Nome </th>
                    <th> Descrição </th>
                    <th> Peso </th>
                    <th> Imagem </th>
                    <th> Ações </th>
                </tr>
            <tbody>
                <tr>
                    <td> {{ $pet -> nome }} </td>
                    <td> {{ $pet -> descricao }} </td>
                    <td> {{ $pet -> peso }} </td>
                    <td><img style="width: 100px;" src="{{asset('storage/'.$pet->imagem)}}"></td>
                    <td>
                        <a class="btn button" href="{{ route('pet.editar', $pet->id) }}">
                            <i class="fa fa-pencil-alt"></i>
                        </a>
                        <a class="btn button" onclick="return confirm('Tem certeza que deseja excluir?')" href="{{ route('pet.excluir', $pet->id) }}">
                            <i class="fa fa-times"></i>
                        </a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
