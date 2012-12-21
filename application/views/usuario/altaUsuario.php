<script type="text/javascript" src="<?=base_url()?>js/lib/altaUsuario.js"></script>

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
            <label>Correo Electrónico</label>
            <input name="correo" id="correo" type="text" class="form-poshytip" title="Correo electrónico">
        </div>
        <div>
            <label>Contraseña</label>
            <input name="contrasena" id="contrasena" type="password" class="form-poshytip" title="Ingresar contraseña">
        </div>
        <div>
            <label>Confirmar Contraseña</label>
            <input name="contrasena2" id="contrasena2" type="password" class="form-poshytip" title="Confirmar contraseña">
        </div>
        <div>
            <label>Nombre(s)</label>
            <input name="nombre" id="nombre" type="text">
        </div>
        <div>
            <label>Apellido Paterno</label>
            <input name="apaterno" id="apaterno" type="text" class="form-poshytip" title="Apellido paterno">
        </div>
        <div>
            <label>Apellido Materno</label>
            <input name="amaterno" id="amaterno" type="text" class="form-poshytip" title="Apellido materno">
        </div>
        <div>
            <label>Fecha de Nacimiento</label>
            <input name="fechaNacimiento" id="fechaNacimiento" type="text" class="form-poshytip" title="Fecha de nacimiento">
        </div>        <p>&nbsp;</p>
        <p>
            <button name="altaUsuario-submit" id="altaUsuario-submit" >Guardar</button>
        </p>
    </fieldset>
    <p id="error" class="warning" style="display: none;">Message</p>
</form>