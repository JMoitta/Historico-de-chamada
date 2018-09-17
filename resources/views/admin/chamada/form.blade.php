{!! csrf_field() !!}
<div class="form-group">
    <label for="numeroDeOrigem" class="control-label col-sm-2">Número de origem</label>
    <div class="col-sm-10">
        <input type="tel" name="numero_de_origem" id="numeroDeOrigem" class="form-control" value="{{ $page->numero_de_origem ?? '' }}" placeholder="Número de origem...">
    </div>
</div>
<div class="form-group">
    <label for="numeroDeDestino" class="control-label col-sm-2">Número de destino</label>
    <div class="col-sm-10">
        <input type="tel" name="numero_de_destino" id="numeroDeDestino" class="form-control" value="{{ $page->numero_de_destino ?? '' }}" placeholder="Número de destino...">
    </div>
</div>
<div class="form-group">
    <label for="tempoDaLigacao" class="control-label col-sm-2">Tempo da ligação</label>
    <div class="col-sm-10">
        <input type="time" name="tempo_da_ligacao" id="tempoDaLigacao" class="form-control" value="{{ $page->tempo_da_ligacao ?? '' }}" placeholder="Tempo da ligação...">
    </div>
</div>
<div class="form-group">
    <label for="dataEHoraDaLigacao" class="control-label col-sm-2">Data e hora da ligação</label>
    <div class="col-sm-10">
        <input type="datetime-local" name="data_e_hora_da_ligacao" id="dataEHoraDaLigacao" class="form-control" value="{{ $page->data_e_hora_da_ligacao ?? '' }}" placeholder="Tempo da ligação...">
    </div>
</div>
<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
        <input type="submit" value="salvar" class="btn btn-primary">
    </div>
</div>