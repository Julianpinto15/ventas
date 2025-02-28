<?php
require_once "../../config/app.php";
require_once "../views/inc/session_start.php";
require_once "../../autoload.php";

use app\controllers\productController;

if(isset($_POST['modulo_producto'])){

    $insProducto = new productController();

    if($_POST['modulo_producto']=="registrar"){
        echo $insProducto->registrarProductoControlador();
    }

    if($_POST['modulo_producto']=="eliminar"){
        echo $insProducto->eliminarProductoControlador();
    }

    if($_POST['modulo_producto']=="actualizar"){
        echo $insProducto->actualizarProductoControlador();
    }

    if($_POST['modulo_producto']=="eliminarFoto"){
        echo $insProducto->eliminarFotoProductoControlador();
    }

    if($_POST['modulo_producto']=="actualizarFoto"){
        echo $insProducto->actualizarFotoProductoControlador();
    }

    if ($_POST['modulo_producto'] == "listar") {
        $pagina = isset($_POST['pagina']) ? (int)$_POST['pagina'] : 1;
        $registros = isset($_POST['registros']) ? (int)$_POST['registros'] : 10;
        $busqueda = isset($_POST['busqueda']) ? $_POST['busqueda'] : "";
        $categoria = isset($_POST['categoria']) ? (int)$_POST['categoria'] : 0;
        $subcategoria = isset($_POST['subcategoria']) ? (int)$_POST['subcategoria'] : 0;
        $autor = isset($_POST['autor']) ? (int)$_POST['autor'] : 0;
        $editorial = isset($_POST['editorial']) ? (int)$_POST['editorial'] : 0;
        
        // Pass all filter parameters to the controller
        echo $insProducto->listarProductoControlador($pagina, $registros, "productList", $busqueda, $categoria, $subcategoria, $autor, $editorial);
    }
} else {
    session_destroy();
    header("Location: ".APP_URL."login/");
}