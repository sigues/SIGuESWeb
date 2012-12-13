<script type="text/javascript" src="js/lib/altaUsuario.js"></script>

<form action="" class="form" id="altaUsuario" name="altaUsuario" method="post">
    <fieldset>
        <? if(isset($error) && is_array($error)){
            foreach($error as $err) { ?>
                <p class="error-box"><?=$err?></p>
        <? }
        } ?>
        <div>
            <label>Perfil</label>
            <select name="perfil" id="perfil">
                <option value="0"> Seleccione </option>
                <option value="1"> Alumno </option>
                <option value="3"> Maestro </option>
                <option value="5"> Editor </option>
            </select>
        </div>
        <div>
            <label>Usuario</label>
            <input name="usuario" id="usuario" type="text" class="form-poshytip" title="Ingresar usuario">
        </div>
        <div>
            <label>Contraseña</label>
            <input name="contrasena" id="contrasena" type="password" class="form-poshytip" title="Ingresar contraseña">
        </div>
        <p>&nbsp;</p>
        <p>Si aún no cuenta con acceso puede <?=anchor(base_url()."index.php/usuario/altaUsuario","darse de alta aquí")?>.</p>
        <p><input type="button" value="Ingresar" name="login-submit" id="login-submit" /></p>
    </fieldset>
    <p id="error" class="warning" style="display: none;">Message</p>
</form>