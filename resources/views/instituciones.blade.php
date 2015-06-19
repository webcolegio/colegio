<form action="{SELECT_INS}" method="post">
    <div class="descripcion-campo">
        Elija la Institucion Educativa
        <div class="s-line"></div>
    </div>
    <table class="tabla_formulario">
        <tr>
            <td>
                <label for="institucion">Instituciones</label>
            </td>
            <td>
                <select class="sel" name="institucion">
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