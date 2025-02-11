<?php
	
	require_once "../../config/app.php";
	require_once "../views/inc/session_start.php";
	require_once "../../autoload.php";
	
	use app\controllers\cashierController;

	if(isset($_POST['modulo_caja'])){

		$insCaja = new cashierController();

		if($_POST['modulo_caja']=="registrar"){
			echo $insCaja->registrarCajaControlador();
		}

		if($_POST['modulo_caja']=="eliminar"){
			echo $insCaja->eliminarCajaControlador();
		}

		if($_POST['modulo_caja']=="actualizar"){
			echo $insCaja->actualizarCajaControlador();
		}

    if($_POST['modulo_caja']=="listar"){
    // Obtener los parámetros de la petición o establecer valores por defecto
    $pagina = isset($_POST['pagina']) ? $_POST['pagina'] : 1;
    $registros = isset($_POST['registros']) ? $_POST['registros'] : 10;
    $url = isset($_POST['url']) ? $_POST['url'] : 'caja/lista';
    $busqueda = isset($_POST['busqueda']) ? $_POST['busqueda'] : '';

    echo $insCaja->listarCajaControlador($pagina, $registros, $url, $busqueda);
}
		
	}else{
		session_destroy();
		header("Location: ".APP_URL."login/");
	}