 <div class="registration-container">
        <div class="form-header">
            <center>
                <?php   
                    $id = $insLogin->limpiarCadena($url[1]);  
                    if ($id == $_SESSION['id']) {  
                ?>
                <h1>Mi cuenta - Actualización</h1>
                <?php } else { ?>
                <h2>Actualizar usuario</h2>
                <?php } ?>
            </center>
        </div>

        <?php 
            $datos = $insLogin->seleccionarDatos("Unico", "usuario", "usuario_id", $id);  
            if ($datos->rowCount() == 1) { 
                $datos = $datos->fetch(); 
        ?>

        <div class="user-info text-center mb-4">
            <h2><?php echo $datos['usuario_nombre']." ".$datos['usuario_apellido']; ?></h2>
            <p>
                <strong>Usuario creado:</strong> 
                <?php 
                    if (!empty($datos['usuario_creado'])) {
                        echo date("d-m-Y h:i:s A", strtotime($datos['usuario_creado']));
                    } else {
                        echo "Fecha no disponible";
                    }
                ?>
                &nbsp; 
                <strong>Usuario actualizado:</strong> 
                <?php 
                    if (!empty($datos['usuario_actualizado'])) {
                        echo date("d-m-Y h:i:s A", strtotime($datos['usuario_actualizado']));
                    } else {
                        echo "Fecha no disponible";
                    }
                ?>
            </p>
        </div>

        <form class="FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/usuarioAjax.php" method="POST" autocomplete="off">
            <input type="hidden" name="modulo_usuario" value="actualizar">
            <input type="hidden" name="usuario_id" value="<?php echo $datos['usuario_id']; ?>">

            <div class="row mb-4">
                <div class="col-md-3 mb-3 mb-md-0">
                    <label for="usuario_nombre" class="form-label">Nombres</label>
                    <input type="text" class="form-control" id="usuario_nombre" name="usuario_nombre" 
                           pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" 
                           value="<?php echo $datos['usuario_nombre']; ?>" required>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                    <label for="usuario_apellido" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="usuario_apellido" name="usuario_apellido" 
                           pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" 
                           value="<?php echo $datos['usuario_apellido']; ?>" required>
                </div>
                <div class="col-md-3 mb-3 mb-md-0">
                    <label for="usuario_usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="usuario_usuario" name="usuario_usuario" 
                           pattern="[a-zA-Z0-9]{4,20}" maxlength="20" 
                           value="<?php echo $datos['usuario_usuario']; ?>" required>
                </div>
                <div class="col-md-3">
                    <label for="usuario_email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="usuario_email" name="usuario_email" 
                           maxlength="70" value="<?php echo $datos['usuario_email']; ?>">
                </div>
            </div>

      

            <div class="alert alert-info text-center mb-2">
                "Para actualizar la clave, complete ambos campos. Déjelos vacíos si no desea cambiarla."
            </div>

            <div class="row mb-4">
                <div class="col-md-6 mb-3 mb-md-0">
                    <label for="usuario_clave_1" class="form-label">Nueva clave</label>
                    <input type="password" class="form-control" id="usuario_clave_1" name="usuario_clave_1" 
                           pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100">
                </div>
                <div class="col-md-6">
                    <label for="usuario_clave_2" class="form-label">Repetir nueva clave</label>
                    <input type="password" class="form-control" id="usuario_clave_2" name="usuario_clave_2" 
                           pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100">
                </div>
            </div>

            <div class="alert alert-warning text-center mb-2">
                "Para actualizar los datos, ingrese su USUARIO y CLAVE de inicio de sesión."
            </div>

		<div class="row mb-4">
		<div class="row mb-4">
    <div class="col-md-4 mb-3 mb-md-0">
        <label for="administrador_usuario" class="form-label">Usuario</label>
        <input type="text" class="form-control" id="administrador_usuario" name="administrador_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required>
    </div>

    <div class="col-md-3-5 mb-3 mb-md-0">
        <label for="administrador_clave" class="form-label">Clave</label>
        <input type="password" class="form-control" id="administrador_clave" name="administrador_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>
    </div>

    <div class="col-md-5  mb-3">
        <label for="usuario_caja" class="form-label">Caja de ventas <?php echo CAMPO_OBLIGATORIO; ?></label>
        <div class="select">
            <select name="usuario_caja" class="form-control">
                <?php
                    $datos_cajas = $insLogin->seleccionarDatos("Normal", "caja", "*", 0);
                    while ($campos_caja = $datos_cajas->fetch()) {
                        if ($campos_caja['caja_id'] == $datos['caja_id']) {
                            echo '<option value="' . $campos_caja['caja_id'] . '" selected="">Caja No.' . $campos_caja['caja_numero'] . ' - ' . $campos_caja['caja_nombre'] . ' (Actual)</option>';
                        } else {
                            echo '<option value="' . $campos_caja['caja_id'] . '">Caja No.' . $campos_caja['caja_numero'] . ' - ' . $campos_caja['caja_nombre'] . '</option>';
                        }
                    }
                ?>
            </select>
        </div>
    </div>
</div>


<div class="text-center">
    <button type="submit" class="btn btn-primary">Actualizar</button>
</div>



        </form>

        <?php 
            } else { 
                include "./app/views/inc/error_alert.php"; 
            } 
        ?>
</div>
