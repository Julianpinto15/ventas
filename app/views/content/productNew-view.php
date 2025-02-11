<div class="container">
    <div class="position-contenido">
        <div class="position-buttom">
            <button class="btn-registrar btn btn-primary mb-4" onclick="abrirModalRegistroproducto()">
                <i class="bi bi-plus-square"></i>
                Nuevo Producto
            </button>
        </div>

        <div class="content-name">
            <div class="container-fluid mb-4">
                <h1 class="text-titulo">Productos</h1>
                <h2 class="h3 text-muted">Gestión de Productos</h2>
            </div>
        </div>
    </div>

    <!-- Listado de Productos -->
    <div id="lista-productos" class="mt-4">
        <!-- Aquí se cargará la lista de productos -->
    </div>

<!-- Modal de Registro -->
<div class="modal fade" id="modal-registro-producto" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold text-model_title">Registrar Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="form-registro-producto" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="modulo_producto" value="registrar">

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-model">Código de Barra</label>
                            <input class="form-control text-model_input" type="text" name="producto_codigo" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-model">Nombre</label>
                            <input class="form-control text-model_input" type="text" name="producto_nombre" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label fw-semibold text-model">Precio Compra</label>
                            <input class="form-control text-model_input" type="number" step="0.01" name="producto_precio_compra" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label fw-semibold text-model">Precio Venta</label>
                            <input class="form-control text-model_input" type="number" step="0.01" name="producto_precio_venta" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label fw-semibold text-model">Stock</label>
                            <input class="form-control text-model_input" type="number" name="producto_stock" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label fw-semibold text-model">Nombre del proveedor</label>
                            <input class="form-control text-model_input" type="text" name="producto_marca">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label fw-semibold text-model">Telefono proveedor</label>
                            <input class="form-control text-model_input" type="text" name="producto_modelo">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label fw-semibold text-model">Presentación del producto *</label>
                            <select class="form-select" name="producto_unidad" required>
                                <option value="" selected>Seleccione una opción</option>
                                <?php echo $insLogin->generarSelect(PRODUCTO_UNIDAD,"VACIO"); ?>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label fw-semibold text-model">Categoría *</label>
                            <select class="form-select" name="producto_categoria" required>
                                <option value="" selected>Seleccione una opción</option>
                                <?php
                                    $datos_categorias = $insLogin->seleccionarDatos("Normal", "categoria", "*", 0);
                                    while ($categoria = $datos_categorias->fetch()) {
                                        echo "<option value='{$categoria['categoria_id']}'>{$categoria['categoria_nombre']}</option>";
                                    }
                                ?>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label fw-semibold text-model">Subcategoría *</label>
                            <select class="form-select" name="producto_subcategoria" required>
                                <option value="" selected>Seleccione una opción</option>
                                <?php
                                    $datos_subcategorias = $insLogin->seleccionarDatos("Normal", "subcategoria", "*", 0);
                                    while ($subcategoria = $datos_subcategorias->fetch()) {
                                        echo "<option value='{$subcategoria['id_subcategoria']}'>{$subcategoria['nombre']}</option>";
                                    }
                                ?>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label fw-semibold text-model">Autor</label>
                            <select class="form-select" name="idAutor">
                                <option value="" selected>Seleccione una opción</option>
                                <?php
                                    $datos_autores = $insLogin->seleccionarDatos("Normal", "autor", "*", 0);
                                    while ($autor = $datos_autores->fetch()) {
                                        echo "<option value='{$autor['idAutor']}'>{$autor['nombre']}</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

					<div class="row mb-3">
					<div class="col-md-4">
						<label class="form-label fw-semibold text-model">Editorial</label>
						<select class="form-select" name="editorial_id">
							<option value="" selected>Seleccione una opción</option>
							<?php
								$datos_editoriales = $insLogin->seleccionarDatos("Normal", "editorial", "*", 0);
								while ($editorial = $datos_editoriales->fetch()) {
									echo "<option value='{$editorial['idEditorial']}'>{$editorial['nombre']}</option>";
								}
							?>
						</select>
					</div>

					<div class="col-md-8">
						<label class="form-label fw-semibold text-model">Imagen del Producto</label>
						<input class="form-control text-model_input" type="file" name="producto_foto" accept=".jpg, .png, .jpeg">
						<small class="text-muted">Formatos permitidos: JPG, JPEG, PNG. (MAX 5MB)</small>
					</div>
				</div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-success text-model">Registrar Producto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal de Edición -->
<div class="modal fade" id="modal-editar-producto" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold text-model_title">Editar Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
            <form id="form-edicion-producto" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="modulo_producto" value="actualizar">
    <input type="hidden" id="producto_id" name="producto_id">

    <!-- Código de Barra -->
    <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label fw-semibold text-model">Código de Barra</label>
            <input class="form-control text-model_input" type="text" id="edit_producto_codigo" name="producto_codigo" required>
        </div>
        <div class="col-md-6">
            <label class="form-label fw-semibold text-model">Nombre</label>
            <input class="form-control text-model_input" type="text" id="edit_producto_nombre" name="producto_nombre" required>
        </div>
    </div>

    <!-- Precios y Stock -->
    <div class="row mb-3">
        <div class="col-md-4">
            <label class="form-label fw-semibold text-model">Precio Compra</label>
            <input class="form-control text-model_input" type="number" id="edit_producto_precio_compra" name="producto_precio_compra" step="0.01" required>
        </div>
        <div class="col-md-4">
            <label class="form-label fw-semibold text-model">Precio Venta</label>
            <input class="form-control text-model_input" type="number" id="edit_producto_precio_venta" name="producto_precio_venta" step="0.01" required>
        </div>
        <div class="col-md-4">
            <label class="form-label fw-semibold text-model">Stock</label>
            <input class="form-control text-model_input" type="number" id="edit_producto_stock" name="producto_stock" required>
        </div>
    </div>

    <!-- Proveedor, Modelo, Presentación -->
    <div class="row mb-3">
        <div class="col-md-4">
            <label class="form-label fw-semibold text-model">Nombre del proveedor</label>
            <input class="form-control text-model_input" type="text" id="edit_producto_marca" name="producto_marca">
        </div>
        <div class="col-md-4">
            <label class="form-label fw-semibold text-model">Telefono Proveedor</label>
            <input class="form-control text-model_input" type="number" id="edit_producto_modelo" name="producto_modelo">
        </div>
        <div class="col-md-4">
            <label class="form-label fw-semibold text-model">Presentación del producto *</label>
            <select class="form-select" id="edit_producto_unidad" name="producto_unidad" required>
                <option value="" selected>Seleccione una opción</option>
                <?php echo $insLogin->generarSelect(PRODUCTO_UNIDAD, "VACIO"); ?>
            </select>
        </div>
    </div>

    <!-- Categoría y Subcategoría -->
    <div class="row mb-3">
        <div class="col-md-4">
            <label class="form-label fw-semibold text-model">Categoría *</label>
            <select class="form-select" id="edit_producto_categoria" name="producto_categoria" required>
                <option value="" selected>Seleccione una opción</option>
                <?php
                    $datos_categorias = $insLogin->seleccionarDatos("Normal", "categoria", "*", 0);
                    while ($categoria = $datos_categorias->fetch()) {
                        echo "<option value='{$categoria['categoria_id']}'>{$categoria['categoria_nombre']}</option>";
                    }
                ?>
            </select>
        </div>
        <div class="col-md-4">
            <label class="form-label fw-semibold text-model">Subcategoría *</label>
            <select class="form-select" id="edit_producto_subcategoria" name="producto_subcategoria" required>
                <option value="" selected>Seleccione una opción</option>
                <?php
                    $datos_subcategorias = $insLogin->seleccionarDatos("Normal", "subcategoria", "*", 0);
                    while ($subcategoria = $datos_subcategorias->fetch()) {
                        echo "<option value='{$subcategoria['id_subcategoria']}'>{$subcategoria['nombre']}</option>";
                    }
                ?>
            </select>
        </div>
        <div class="col-md-4">
            <label class="form-label fw-semibold text-model">Autor</label>
            <select class="form-select" id="edit_idAutor" name="idAutor">
                <option value="" selected>Seleccione una opción</option>
                <?php
                    $datos_autores = $insLogin->seleccionarDatos("Normal", "autor", "*", 0);
                    while ($autor = $datos_autores->fetch()) {
                        echo "<option value='{$autor['idAutor']}'>{$autor['nombre']}</option>";
                    }
                ?>
            </select>
        </div>
    </div>

    <!-- Editorial y Foto -->
    <div class="row mb-3">
        <div class="col-md-4">
            <label class="form-label fw-semibold text-model">Editorial</label>
            <select class="form-select" id="edit_editorial_id" name="editorial_id">
                <option value="" selected>Seleccione una opción</option>
                <?php
                    $datos_editoriales = $insLogin->seleccionarDatos("Normal", "editorial", "*", 0);
                    while ($editorial = $datos_editoriales->fetch()) {
                        echo "<option value='{$editorial['idEditorial']}'>{$editorial['nombre']}</option>";
                    }
                ?>
            </select>
        </div>
        <div class="col-md-8">
            <label class="form-label fw-semibold text-model">Imagen del Producto</label>
            <input class="form-control text-model_input" type="file" id="edit_producto_foto" name="producto_foto" accept=".jpg, .png, .jpeg">
            <small class="text-muted">Formatos permitidos: JPG, JPEG, PNG. (MAX 5MB)</small>
        </div>
    </div>
    <!-- Botón para Actualizar -->
        <div class="mb-3">
            <button type="submit" class="btn btn-success text-model">Actualizar Producto</button>
        </div>
    </form>
                </div>
            </div>
        </div>
    </div>

<script>
// Modal handling functions
function abrirModalRegistroproducto() {
    const modal = new bootstrap.Modal(document.getElementById('modal-registro-producto'));
    modal.show();
}

function cerrarModalRegistroproducto() {
    const modal = bootstrap.Modal.getInstance(document.getElementById('modal-registro-producto'));
    modal.hide();
    document.getElementById('form-registro-producto').reset();
}

function abrirModalEditarProducto(producto) {
    try {
        console.log('Datos recibidos:', producto);
        
        // Asignar valores a los campos del formulario
        document.getElementById('producto_id').value = producto.producto_id;
        document.getElementById('edit_producto_codigo').value = producto.producto_codigo;
        document.getElementById('edit_producto_nombre').value = producto.producto_nombre;
        document.getElementById('edit_producto_precio_compra').value = producto.producto_precio_compra;
        document.getElementById('edit_producto_precio_venta').value = producto.producto_precio_venta;
        document.getElementById('edit_producto_stock').value = producto.producto_stock_total;
        document.getElementById('edit_producto_marca').value = producto.producto_marca;
        document.getElementById('edit_producto_modelo').value = producto.producto_modelo;
        document.getElementById('edit_producto_unidad').value = producto.producto_tipo_unidad;
        document.getElementById('edit_producto_categoria').value = producto.categoria_id;
        document.getElementById('edit_producto_subcategoria').value = producto.id_subcategoria;
        document.getElementById('edit_idAutor').value = producto.idAutor;
        document.getElementById('edit_editorial_id').value = producto.idEditorial;

        // Abrir el modal
        const modalElement = document.getElementById('modal-editar-producto');
        const modal = new bootstrap.Modal(modalElement);
        modal.show();
        
    } catch (error) {
        console.error('Error al abrir modal:', error);
        console.log('Detalles del producto:', producto);
        alert('Error al abrir el modal: ' + error.message);
    }
}


function cerrarModalEditarproducto() {
    const modal = bootstrap.Modal.getInstance(document.getElementById('modal-editar-producto'));
    modal.hide();
    document.getElementById('form-edicion-producto').reset();
}

// Function to load productos list
function cargarProductos(pagina = 1, registros = 10, busqueda = "", categoria = 0) {
    $.ajax({
        url: '<?= APP_URL ?>app/ajax/productoAjax.php',
        type: 'POST',
        data: {
            modulo_producto: 'listar',
            pagina: pagina,
            registros: registros,
            busqueda: busqueda,
            categoria: categoria
        },
        success: function(response) {
            $('#lista-productos').html(response);
        }
    });
}

$(document).ready(function() {
    cargarProductos();
});


// Registration form handler with SweetAlert2
$('#form-registro-producto').on('submit', function(e) {
    e.preventDefault();
    let formData = new FormData(this);
    
    $.ajax({
        url: '<?= APP_URL ?>app/ajax/productoAjax.php',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            const resp = JSON.parse(response);
            Swal.fire({
                icon: resp.icono || 'info',
                title: resp.titulo,
                text: resp.texto,
                width: '400px',
                padding: '2em',
                customClass: {
                    title: 'fs-4',
                    htmlContainer: 'fs-4',
                    confirmButton: 'fs-5',
                    timer: 2000,
                    timerProgressBar: true
                }
            }).then((result) => {
                if (resp.tipo === "limpiar") {
                    cerrarModalRegistroproducto();
                    cargarProductos();
                }
            });
        }
    });
});

// Edit form handler with SweetAlert2
$('#form-edicion-producto').on('submit', function(e) {
    e.preventDefault();
    let formData = new FormData(this);
    formData.append('modulo_producto', 'actualizar');
    
    $.ajax({
        url: '<?= APP_URL ?>app/ajax/productoAjax.php',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            const resp = JSON.parse(response);
            Swal.fire({
                icon: resp.icono || 'info',
                title: resp.titulo,
                text: resp.texto,
                width: '400px',
                padding: '2em',
                customClass: {
                    title: 'fs-4',
                    htmlContainer: 'fs-4',
                    confirmButton: 'fs-5'
                }
            }).then((result) => {
                if (resp.tipo === "recargar") {
                    cerrarModalEditarproducto();
                    cargarProductos();
                }
            });
        }
    });
});


// Function to delete producto with SweetAlert2
function eliminarProducto(id) {
    Swal.fire({
        title: '¿Está seguro?',
        text: "¿Desea eliminar este producto?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar',
        width: '400px',
        padding: '2em',
        customClass: {
            title: 'fs-4',
            htmlContainer: 'fs-5',
            confirmButton: 'fs-5',
            cancelButton: 'fs-5'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: '<?= APP_URL ?>app/ajax/productoAjax.php',
                type: 'POST',
                data: {
                    modulo_producto: 'eliminar',
                    producto_id: id
                },
                success: function(response) {
                    const resp = JSON.parse(response);
                    Swal.fire({
                        icon: resp.icono || 'info',
                        title: resp.titulo,
                        text: resp.texto,
                        width: '400px',
                        padding: '2em',
                        customClass: {
                            title: 'fs-4',
                            htmlContainer: 'fs-5',
                            confirmButton: 'fs-5'
                        }
                    }).then((result) => {
                        if (resp.tipo === "recargar") {
                            cargarProductos();
                        }
                    });
                }
            });
        }
    });
}

// Load productos when page is ready
$(document).ready(function() {
    cargarProductos();
});
</script>