<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <form action="{VIEW_LIST_FOR_GROUPS}" method="post">
                <div class="form-group">
                    <label for="grupos">Seleccione un Grupo</label>
                    <select name="grupo" class="form-control">
                        {grupos}
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Seleccionar</button>
            </form>
        </div>
    </div>
    <div class="container">
        {datos}
    </div>
</div>