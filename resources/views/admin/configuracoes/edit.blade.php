@component('admin.layouts.elements.body')
    @slot('title') Chamada @endslot
    @slot('description') Inclusão de chamada  @endslot

    <form action="{{ route('configuracoes.update') }}" class="form-horizontal" method="post">
	 	{{ method_field('PUT') }}
        @include('admin.configuracoes.form')
    </form>

@endcomponent