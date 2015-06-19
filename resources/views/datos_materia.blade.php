<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <form action="{SET_MAT}" method="post">
                <div class="form-group">
                    <label for="area">Area</label>
                    <select name="area" class="form-control">
                        {opciones_area}
                    </select>
                </div>
                <div class="form-group">
                    <label for="grado">Grado</label><br>
                    <select name="grado" class="form-control">
                        {opciones_grado}
                    </select>
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="intensidad">Intensidad Horaria</label> 
                    <input type="number" required name="intensidad" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
        </div>
    </div>
</div>