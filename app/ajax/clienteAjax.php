<?php
	
	require_once "../../config/app.php";
	require_once "../views/inc/session_start.php";
	require_once "../../autoload.php";
	
	use app\controllers\clientController;

	if(isset($_POST['modulo_cliente'])){

		$insCliente = new clientController();

		if($_POST['modulo_cliente']=="registrar"){
			echo $insCliente->registrarClienteControlador();
		}

		if($_POST['modulo_cliente']=="eliminar"){
			echo $insCliente->eliminarClienteControlador();
		}

		if($_POST['modulo_cliente']=="actualizar"){
			echo $insCliente->actualizarClienteControlador();
		}
    if($_POST['modulo_cliente']=="listar"){
    // Obtener los parámetros de la petición o establecer valores por defecto
    $pagina = isset($_POST['pagina']) ? $_POST['pagina'] : 1;
    $registros = isset($_POST['registros']) ? $_POST['registros'] : 10;
    $url = isset($_POST['url']) ? $_POST['url'] : 'cliente/lista';
    $busqueda = isset($_POST['busqueda']) ? $_POST['busqueda'] : '';

    echo $insCliente->listarClienteControlador($pagina, $registros, $url, $busqueda);
}
		
	}else{
		session_destroy();
		header("Location: ".APP_URL."login/");
	}