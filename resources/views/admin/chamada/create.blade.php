@component('admin.layouts.elements.body')
    @slot('title') Chamada @endslot
    @slot('description') Inclusão de chamada  @endslot

    <form action="{{ route('chamadas.store') }}" class="form-horizontal" method="post">
        @include('admin.chamada.form')
    </form>

    <a href="{{ route('chamadas.index') }}" class="btn btn-xs btn-default">voltar</a>
@endcomponent