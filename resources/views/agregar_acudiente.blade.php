<form name="datos_acudiente" method="post" action="{SET_ACU}" class="formulario">

    <fieldset id="field1">
        <input type="hidden" name="idestudiante"  value="{ESTUDIANTE}">
        <input type="hidden" name="idinstitucion" value="{INSTITUCION}">
        <div class="descripcion-campo">
            Datos del Acudiente
            <div class="s-line"></div>
        </div>
        
        <table class="tabla_formulario">
            <tr>
                <td>
                    <label for="Nombres">Nombres</label>
                </td>
                <td>
                    <input name="Nombres" type="text" required>
                </td>
                <td>
                    <label for="Apellidos">Apellidos</label>
                </td>
                <td>
                    <input name="Apellidos" type="text" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Identificacion">Numero Documento</label>
                </td>
                <td>
                    <input name="Identificacion" type="Number" required>
                </td>
                <td>
                    <label for="Sexo">Sexo</label>
                </td>
                <td>
                    <select name="Sexo" class="sel">
                        <option >seleccione..</option>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="FechaNacimiento">Fecha de Nacimiento</label>
                </td>
                <td>
                    <input name="FechaNacimiento" type="date" required>
                </td>
                <td>
                    <label for="DepartamentoNacimiento">Departamento de Nacimiento</label>
                </td>
                <td>
                    <input name="DepartamentoNacimiento" type="text" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="CiudadNacimiento">Ciudad de Nacimiento</label>
                </td>
                <td>
                    <input name="CiudadNacimiento" type="text" required>
                </td>
                <td>
                    <label for="DepartamentoResidencia">Departamento Residencia</label>
                </td>
                <td>
                    <input name ="DepartamentoResidencia" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="CiudadResidencia">Ciudad de Residencia</label>
                </td>
                <td>
                    <input name="CiudadResidencia" type="text" required>
                </td>
                <td>
                    <label for="Direccion">Direccion</label>
                </td>
                <td>
                    <input name="Direccion" type="text"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Email">E-mail</label>
                </td>
                <td>
                    <input name ="Email" type="email" placeholder="ej: alguien@correo.com">
                </td> 
                <td>
                    <label for="TipoSangre">Grupo Sanguineo</label>
                </td>    
                <td>
                    <select name="TipoSangre" class="sel">
                        <option >seleccione..</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="NroCelular">Nro Celular</label>
                </td>
                <td>
                    <input name="NroCelular" type="number">
                </td>
                <td>
                    <label for="Estrato">Estrato</label>
                </td>
                <td>
                    <input name="Estrato" type="number">
                </td>    
            </tr>
        </table>
    </fieldset>
    <button type="submit" class="boton-formulario">Registrar</button>
</form>