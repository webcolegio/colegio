<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <form action="{SET_GROUPS}" method="post">
                <div class="form-group">
                        <label for="id_grado">Seleccione el grado</label>
                        <select name="id_grado"  class="form-control">
                            {opciones}
                        </select>
                </div>
                <div class="form-group">
                        <label for="nombre_grupo">Nombre del Grupo</label>
                        <input name="nombre_grupo" type="text" class="form-control">
                </div>
                <div class="form-group">
                        <label>Cupos</label>
                        <input type="number" name="cupos"  class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
            </form> 
        </div>
    </div>
</div>