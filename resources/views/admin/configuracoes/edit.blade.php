@component('admin.layouts.elements.body')
    @slot('title') Chamada @endslot
    @slot('description') Inclusão de chamada  @endslot

    <form action="{{ route('chamadas.store') }}" class="form-horizontal" method="post">
        @include('admin.configuracoes.form')
    </form>

@endcomponent