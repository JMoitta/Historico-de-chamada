{!! csrf_field() !!}
<div class="form-group">
    <label for="custoDoMinuto" class="control-label col-sm-2">Custo do minuto</label>
    <div class="col-sm-10">
        <input type="tel" name="custo_do_minuto" id="custoDoMinuto" class="form-control" value="{{ number_format($configuracao->custo_do_minuto, 2) ?? '' }}" placeholder="Número de origem...">
    </div>
</div>
<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
        <input type="submit" value="salvar" class="btn btn-primary">
    </div>
</div>