{!! csrf_field() !!}
<div class="form-group">
    <label for="numeroDeOrigem" class="control-label col-sm-2">Custo do minuto</label>
    <div class="col-sm-10">
        <input type="tel" name="custo_do_minuto" id="numeroDeOrigem" class="form-control" value="{{ $configuracoes->custo_do_minuto ?? '' }}" placeholder="Número de origem...">
    </div>
</div>
<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
        <input type="submit" value="salvar" class="btn btn-primary">
    </div>
</div>