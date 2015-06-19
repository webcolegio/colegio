<div class="col-md-6">    
<form name="matricula" method="post" action="{SET_ES}" role="form">
    <fieldset id="field1">
        <div class="form-group">
            <label for="Nombres">Nombres</label>
            <input name="Nombres" type="text" required>
        </div>
        <div class="form-group">
            <input name="Apellidos" type="text" required>
            <label for="Apellidos">Apellidos</label>
        </div>
        <div class="form-group">
            <label for="Identificacion">Numero Documento</label>
            <input name="Identificacion" type="Number" required>
        </div>
        <div class="form-group">
            <label for="Sexo">Sexo</label>
            <select name="Sexo" class="sel">
                <option >seleccione..</option>
                <label for="Sexo">Sexo</label>
                <option value="F">Femenino</option>
            </select>
            <option value="M">Masculino</option>
        </div>
        <div class="form-group">
            <label for="FechaNacimiento">Fecha de Nacimiento</label>
            <input name="FechaNacimiento" type="date" required>
        </div>
        <div class="form-group">
            <label for="DepartamentoNacimiento">Departamento de Nacimiento</label>
            <input name="DepartamentoNacimiento" type="text" required>
        </div>
        <div class="form-group">
            <label for="CiudadNacimiento">Ciudad de Nacimiento</label>
            <input name="CiudadNacimiento" type="text" required>
        </div>
        <div class="form-group">
            <label for="DepartamentoResidencia">Departamento Residencia</label>
            <input name ="DepartamentoResidencia" type="text">
        </div>
        <div class="form-group">
            <label for="CiudadResidencia">Ciudad de Residencia</label>
            <input name="CiudadResidencia" type="text" required>
        </div>
        <div class="form-group">
            <label for="Direccion">Direccion</label>
            <input name="Direccion" type="text"><br>
        </div>
        <div class="form-group">
            <label for="Email">E-mail</label>
            <input name ="Email" type="email" placeholder="ej: alguien@correo.com">
        </div>
        <div class="from-group">
            <label for="TipoSangre">Grupo Sanguineo</label>    
            <select name="TipoSangre" class="sel">
                <option >seleccione..</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select>
        </div>
        <div class="form-group">
            <label for="NroCelular">Nro Celular</label>
            <input name="NroCelular" type="number">
        </div>
        <div>    
            <label for="Estrato">Estrato</label>
            <input name="Estrato" type="number">
        </div>
    </fieldset>
    <button type="submit" class="btn-primary">Registrar</button>
</form>
</div>