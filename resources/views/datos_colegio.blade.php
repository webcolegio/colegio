<div class="row">
    <div class="col-lg-12">
        <form method="post" action="{ADD_COLEGIO}">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="nit">NIT</label>
                        <input type="number" name="nit" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="departamento">Departamento</label>
                        <input type="text" class="form-control" name="departamento" required>
                    </div>
                    <div class="form-group">
                        <label for="ciudad">Ciudad</label>
                        <input type="text" class="form-control" name="ciudad">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Direccion</label>
                        <input type="text" name="direccion" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="number" name="telefono" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="fax">Fax</label>
                        <input type="number" name="fax" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <select class="form-control" name="tipo">
                            <option value="primaria">Primaria</option>
                            <option value="secundaria">Secundaria</option>
                            <option value="primaria_secundaria">Primaria y Secundaria</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </form>     
    </div>
</div>
