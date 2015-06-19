<form action="{SET_MA}" method="post">
    <div class="descripcion-campo">
        Matricular Estudiante
        <div class="s-line"></div>
    </div>
    <table class="tabla_formulario">
       <input type="hidden"  name="idestudiante"  value="{ESTUDIANTE}">
        <input type="hidden" name="idinstitucion" value="{INSTITUCION}">
        <input type="hidden" name="idgrado" value="{GRADO}">
        <tr>
            <td>
                <label for="grupo">Instituciones</label>
            </td>
            <td>
                <select class="sel" name="grupo">
                    {opciones}
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" class="boton-formulario">Siguiente</button>
            </td>
        </tr>
    </table>
</form>