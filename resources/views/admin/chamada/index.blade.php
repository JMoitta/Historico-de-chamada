@component('admin.layouts.elements.body')
    @slot('title') Páginas @endslot
    @slot('description') Administração de páginas @endslot

    <a href="{{ route('chamadas.create') }}" class="btn btn-default">novo</a>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Data e hora da ligação</th>
            <th>Número de origem</th>
            <th>Número de destino</th>
            <th class="text-right">ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($chamadas as $chamada)
        <tr>
            <td>{{ $chamada->id }}</td>
            <td>{{ $chamada->data_e_hora_da_ligacao }}</td>
            <td>{{ $chamada->numero_de_origem }}</td>
            <td>{{ $chamada->numero_de_destino }}</td>
            <td class="text-right">
                <form action="{{ route('chamadas.destroy', $chamada->id) }}" class="form-horizontal" method="post" style="display: inline-block">
                    {!! csrf_field() !!}
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" value="Excluir" class="btn btn-default btn-xs">
                </form>
                <a href="{{ route('chamadas.show', $chamada->id) }}" class="btn btn-default btn-xs">
                    <span class="glyphicon glyphicon-plus"></span>
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    {{ $chamadas->links() }}

@endcomponent