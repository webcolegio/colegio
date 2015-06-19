<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <form method="post" action="{SET_LOAD}">
                <div class="form-group">
                    <label for="docente">docente</label>
                    <select name="docente" class="form-control">
                        {docentes}
                    </select>
                </div>
                <div class="form-group">
                    <label for="asignatura">Asignatura</label>
                    <select name="asignatura" class="form-control">
                        {asignaturas}
                    </select>
                </div>
                <div class="form-group">
                    <label for="grupo">Grupo</label> 
                    <select name="grupo" class="form-control">
                        {grupos}
                    </select>
                </div>
                <div class="form-group">
                    <label for="intensidad">Intensidad</label>
                    <input type="number" name="intensidad" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Asignar</button>
            </form>
        </div>
    </div>
</div>