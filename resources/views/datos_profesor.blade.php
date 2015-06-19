<div class="col-md-6">

    <form action="{SET_TEACHER}" method="post" role="form">
        <div class="form-group">
            <label for="PrimerNombre">Primer Nombre</label>
            <input id="PrimerNombre" name="PrimerNombre" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="SegundoNombre">Segundo Nombre</label>
            <input name="SegundoNombre" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="PrimerApellido">PrimerApellido</label>
            <input name="PrimerApellido" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="SegundoApellido">SegundoApellido</label>
            <input type="text" name="SegundoApellido" class="form-control">
        </div>
        <div class="form-group">
            <label for="Identificacion">Numero Documento</label>
            <input name="Identificacion" type="Number" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Sexo">Sexo</label>
            <select name="Sexo" class="form-control">
                <option >seleccione..</option>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
            </select>
        </div>
        <div class="form-group">
            <label for="FechaNacimiento">Fecha de Nacimiento</label>
            <input name="FechaNacimiento" type="date" class="form-control" required>
        </div>
        <div class="form-group">
            <datalist id="departamentos">
                <option value="CORDOBA">CORDOBA</option>
                <option value="SUCRE">SUCRE</option>
                <option value="BOLIVAR">BOLIVAR</option>
                <option value="ANTIOQUIA">ANTIOQUIA</option>
                <option value="CUNDINAMARCA">CUNDINAMARCA</option>
                <option value="CHOCO">CHOCO</option>
                <option value="ATLANTICO">ATLANTICO</option>
                <option value="MAGDALENA">MAGDALENA</option>
                <option value="GUAJIRA">GUAJIRA</option>
            </datalist>

            <label for="DepartamentoNacimiento">Departamento de Nacimiento</label>
            <input name="DepartamentoNacimiento" type="text" list="departamentos" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="CiudadNacimiento">Ciudad de Nacimiento</label>
            <input name="CiudadNacimiento" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="DepartamentoResidencia">Departamento Residencia</label>
            <input name ="DepartamentoResidencia" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="CiudadResidencia">Ciudad de Residencia</label>
            <input name="CiudadResidencia" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Direccion">Direccion</label>
            <input name="Direccion" type="text" class="form-control" required><br>
        </div>
        <div class="form-group">
            <label for="Email">E-mail</label>
            <input name ="Email" type="email" placeholder="ej: alguien@correo.com" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="TipoSangre">Grupo Sanguineo</label>
            <select name="TipoSangre" class="form-control" required>
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
            <input name="NroCelular" type="number" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="EstadoCivil">Estado Civil</label>
            <select name="EstadoCivil" class="form-control">
                <option value="UNION_LIBRE">UNION LIBRE</option>
                <option value="CASADO">CASADO(A)</option>
                <option value="SOLTERO">SOLTERO(A)</option>
            </select>
        </div>
        <div class="form-group">
            <label for="Estrato">Estrato</label>
            <select name="Estrato" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
        </div>
        <div class="form-group">
            <label for="Escalafon">Escalafon</label>
            <select name="Escalafon" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
            </select> 
        </div>
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="especialidad">Especialidad</label>
            <select name="especialidad" id="especialidad" class="form-control" required>
                {area}
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>