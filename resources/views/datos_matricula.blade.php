<div class="row">
    <div class="col-lg-6">

        <form action="{MAT}" method="post">

            <datalist id="inscritos">
                {estudiantes}
            </datalist>
            <div class="form-group">
                <label for="grupo">Grupo</label>
                <select  class="form-control" name="grupo">
                    {grupos}
                </select>

            </div>
            <div class="form-group">
                <label for="identificacion">Identificacion</label>
                <input type="number" class="form-control" name="identificacion" required list="inscritos">
            </div>
            <button type="submit" class="btn btn-primary">Matricular</button>
        </form>
    </div>
</div>