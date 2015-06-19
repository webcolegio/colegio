<form action="{LOGIN}" method="post">
    <div class="descripcion-campo">
        Iniciar Sesion
        <div class="s-line"></div>
    </div>
    <table class="tabla_formulario">
        <tr>
            <td>
                <label for="username">Usuario</label>
            </td>
            <td>
                <input type="text" name="username" required>
            </td>
            <td>
                <label for="password">Contraseña</label>
            </td>
            <td>
                <input type="password" name="password" required>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" class="boton-formulario">Ingresar</button>
            </td>
        </tr>
    </table>
</form>