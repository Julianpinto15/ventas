<?php
require_once "../../config/app.php";
require_once "../views/inc/session_start.php";
require_once "../../autoload.php";

use app\controllers\categoryController;

if(isset($_POST['modulo_categoria'])){
    $insCategory = new categoryController();
    $response = ['tipo' => '', 'icono' => '', 'titulo' => '', 'texto' => ''];

    try {
        switch($_POST['modulo_categoria']) {
            case 'registrar':
                $resultado = $insCategory->registrarCategoriaControlador();
                $response = [
                    'tipo' => 'limpiar',
                    'icono' => 'success',
                    'titulo' => 'Categoría Registrada',
                    'texto' => 'La categoría se registró correctamente'
                ];
                break;

            case 'eliminar':
                $resultado = $insCategory->eliminarCategoriaControlador();
                $response = [
                    'tipo' => 'recargar',
                    'icono' => 'success',
                    'titulo' => 'Categoría Eliminada',
                    'texto' => 'La categoría se eliminó correctamente'
                ];
                break;

            case 'actualizar':
                $resultado = $insCategory->actualizarCategoriaControlador();
                $response = [
                    'tipo' => 'recargar',
                    'icono' => 'success',
                    'titulo' => 'Categoría Actualizada',
                    'texto' => 'La categoría se actualizó correctamente'
                ];
                break;

            case 'listar':
                $resultado = $insCategory->listarCategoriaControlador(1, 15, '', '');
                echo $resultado;
                exit;
        }

        echo json_encode($response);
    } catch (Exception $e) {
        $response = [
            'tipo' => 'error',
            'icono' => 'error',
            'titulo' => 'Error',
            'texto' => 'Ocurrió un error: ' . $e->getMessage()
        ];
        echo json_encode($response);
    }
} else {
    session_destroy();
    header("Location: ".APP_URL."login/");
}