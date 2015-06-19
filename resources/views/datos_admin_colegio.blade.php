<div class="col-md-6">
    <form action="{ADD_COOR}" method="post" class="formulario">
        <fieldset id="field1">
            <div class="form-group">       
                <label for="PrimerNombre">Primer Nombre</label>
                <input name="PrimerNombre" class="form-control" type="text" required>
            </div>
            <div class="form-group">
                <label for="SegundoNombre">Segundo Nombre</label>
                <input name="SegundoNombre" class="form-control" type="text" required>
            </div>
            <div class="form-group">
                <label for="PrimerApellido">PrimerApellido</label>
                <input name="PrimerApellido" class="form-control" type="text" required>
            </div>    
            <div class="form-group">
                <label for="SegundoApellido">SegundoApellido</label>
                <input type="text" name="SegundoApellido" class="form-control">
            </div>    
            <div class="form-group">
                <label for="Identificacion">Numero Documento</label>
                <input name="Identificacion" class="form-control"type="Number" required>
            </div>
        </fieldset>
        <fieldset id="field2">
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
                <input name="FechaNacimiento" class="form-control" type="date" required>
            </div>
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
            <div class="form-group">
                <label for="DepartamentoNacimiento">Departamento de Nacimiento</label>
                <input name="DepartamentoNacimiento" class="form-control" type="text" list="departamentos" required>
            </div>
            <div class="form-group">
                <label for="CiudadNacimiento">Ciudad de Nacimiento</label>
                <input name="CiudadNacimiento" class="form-control" type="text" required>
            </div>
            <div class="form-group">
                <label for="DepartamentoResidencia">Departamento Residencia</label>
                <input name ="DepartamentoResidencia" class="form-control" type="text">
            </div>
        </fieldset>
        <fieldset id="field3">    
            <div class="form-group">
                <label for="CiudadResidencia">Ciudad de Residencia</label>
                <input name="CiudadResidencia" class="form-control" type="text" required>
            </div>
            <div class="form-group">
                <label for="Direccion">Direccion</label>
                <input name="Direccion" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="Email">E-mail</label>
                <input name ="Email" class="form-control" type="email" placeholder="ej: alguien@correo.com">
            </div>
            <div class="form-group">    
                <label for="TipoSangre">Grupo Sanguineo</label>
                <select name="TipoSangre" class="form-control">
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
                <input name="NroCelular" class="form-control" type="number">
            </div>
        </fieldset>
        <fieldset id="field4">    
            <div class="form-group">
                <label for="EstadoCivil">Estado Civil</label>
                <select name="EstadoCivil"class="form-control">
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
                <label for="colegio">Colegio</label>
                <select name="colegio" class="form-control">
                    {opciones}
                </select>
            </div>
            <div class="form-group">
                <label for="pass">Contraseña</label>
                <input type="password" name="pass" class="form-control">
            </div>
            <button type="submit" class=" btn btn-primary">Registrar</button>
        </fieldset>
        <button type="button" id="siguiente" class="btn btn-success">Siguiente</button>
    </form>
</div>