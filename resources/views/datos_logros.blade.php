<div class="row">
    <div class="col-lg-12">
        <form action="{SET_LOG}"  method="post" role="form">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                   <input type="hidden" name="asignatura" value = {asignatura}>
                    <div class="from-group">
                        <label name="periodo">Periodo</label>
                        <select class="form-control" name="periodo">
                            {opciones}
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="logrogeneral">Logro</label>
                        <textarea name="logrogeneral" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label for="indicador_1">Indicador 1</label>
                        <textarea class="form-control" name="indicador_1"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="indicador_2">Indicador 2</label>
                        <textarea class="form-control" name="indicador_2"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="indicador_3">Indicador 3</label>
                        <textarea class="form-control" name="indicador_3" ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="indicador_4">Indicador 4</label>
                        <textarea class="form-control" name="indicador_4"></textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>