@component('admin.layouts.elements.body')
    @slot('title') Páginas @endslot
    @slot('description') Administração de páginas @endslot

    <a href="{{ route('chamadas.create') }}" class="btn btn-default">novo</a>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>title</th>
            <th class="text-right">ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($chamadas as $chamada)
        <tr>
            <td>{{ $chamada->id }}</td>
            <td>{{ $chamada->title }}</td>
            <td class="text-right">
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