<div class="container">
    <div class="position-contenido">
        <div class="position-buttom">
            <button class="btn-registrar btn btn-primary mb-4" onclick="abrirModalRegistroCliente()">
                Registrar Nuevo Cliente
            </button>
        </div>

        <div class="content-name">
            <div class="container-fluid mb-4">
                <h1 class="text-titulo">Clientes</h1>
                <h2 class="h5 text-muted">Gestión de Clientes</h2>
            </div>
        </div>
    </div>

    <!-- Lista de Clientes -->
    <div id="lista-clientes" class="mt-4">
        <!-- Aquí se cargará la lista de clientes -->
    </div>

    <!-- Modal de Registro -->
    <div class="modal fade" id="registroClienteModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title fw-bold text-model_title">
                    <i class="bi bi-person-plus-fill me-2"></i>Registrar Cliente
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <form id="form-registro-cliente">
                    <input type="hidden" name="modulo_cliente" value="registrar">
                    
                    <div class="row g-3">
                        <!-- Primera columna -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-semibold text-model">Tipo de documento</label>
                                <select class="form-select text-model_input" name="cliente_tipo_documento" required>
                                    <option value="" selected>Seleccione una opción</option>
                                    <?php echo $insLogin->generarSelect(DOCUMENTOS_USUARIOS,"VACIO"); ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold text-model">Número de documento</label>
                                <input class="form-control text-model_input" type="text" name="cliente_numero_documento" 
                                       pattern="[a-zA-Z0-9-]{7,30}" maxlength="30" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold text-model">Nombres</label>
                                <input class="form-control text-model_input" type="text" name="cliente_nombre" 
                                       pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold text-model">Apellidos</label>
                                <input class="form-control text-model_input" type="text" name="cliente_apellido" 
                                       pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold text-model">Email</label>
                                <input class="form-control text-model" type="email" name="cliente_email" maxlength="70">
                               </div>
                        </div>

                        <!-- Segunda columna -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-semibold text-model">Teléfono</label>
                                <input class="form-control text-model_input" type="text" name="cliente_telefono" 
                                       pattern="[0-9()+]{8,20}" maxlength="20">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold text-model">Provincia</label>
                                <input class="form-control text-model_input" type="text" name="cliente_provincia" 
                                       pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}" maxlength="30" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold text-model">Ciudad</label>
                                <input class="form-control text-model_input" type="text" name="cliente_ciudad" 
                                       pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}" maxlength="30" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold text-model">Dirección</label>
                                <input class="form-control text-model_input" type="text" name="cliente_direccion"
                                       pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{4,70}" maxlength="70" required>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-top mt-4">
                        <button type="button" class="btn btn-secondary text-model" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success text-model">Registrar Cliente</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <!-- Modal de Actualización -->
<div id="modal-editar-cliente" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content shadow">
            <div class="modal-header bg-light">
                <h5 class="modal-title fw-bold text-model_title">
                    <i class="bi bi-pencil-square me-2"></i>Actualizar Cliente
                </h5>
                <button type="button" class="btn-close" aria-label="Close" onclick="cerrarModalEditarCliente()"></button>
            </div>
            <div class="modal-body p-4">
                <form id="form-edicion-cliente" method="POST">
                    <input type="hidden" name="modulo_cliente" value="actualizar">
                    <input type="hidden" id="cliente_id" name="cliente_id">

                    <div class="row g-3">
                        <!-- Primera columna -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-semibold text-model">Tipo de documento</label>
                                <select class="form-select text-model_input" id="edit_cliente_tipo_documento" 
                                        name="cliente_tipo_documento" required>
                                    <?php echo $insLogin->generarSelect(DOCUMENTOS_USUARIOS,""); ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold text-model">Número de documento</label>
                                <input id="edit_cliente_numero_documento" class="form-control text-model_input" 
                                       type="text" name="cliente_numero_documento" pattern="[a-zA-Z0-9-]{7,30}" maxlength="30" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold text-model">Nombres</label>
                                <input id="edit_cliente_nombre" class="form-control text-model_input" 
                                       type="text" name="cliente_nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold text-model">Apellidos</label>
                                <input id="edit_cliente_apellido" class="form-control text-model_input" 
                                       type="text" name="cliente_apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold text-model">Email</label>
                                <input id="edit_cliente_email" class="form-control text-model" 
                                       type="email" name="cliente_email" maxlength="70">
                            </div>
                        </div>

                        <!-- Segunda columna -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-semibold text-model">Teléfono</label>
                                <input id="edit_cliente_telefono" class="form-control text-model_input" type="text" 
                                       name="cliente_telefono" pattern="[0-9()+]{8,20}" maxlength="20">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold text-model">Provincia</label>
                                <input id="edit_cliente_provincia" class="form-control text-model_input" type="text" 
                                       name="cliente_provincia" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}" maxlength="30" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold text-model">Ciudad</label>
                                <input id="edit_cliente_ciudad" class="form-control text-model_input" type="text" 
                                       name="cliente_ciudad" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}" maxlength="30" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold text-model">Dirección</label>
                                <input id="edit_cliente_direccion" class="form-control text-model_input" type="text" 
                                       name="cliente_direccion" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{4,70}" maxlength="70" required>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-top mt-4">
                        <button type="button" class="btn btn-secondary text-model" onclick="cerrarModalEditarCliente()">Cancelar</button>
                        <button type="submit" class="btn btn-success text-model">Actualizar Cliente</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<script>

    // Función para mostrar alertas con SweetAlert
function mostrarAlerta(icono, titulo, texto) {
    Swal.fire({
        icon: icono,
        title: titulo,
        text: texto,
        width: '400px',
        padding: '2em',
        customClass: {
            title: 'fs-4',
            htmlContainer: 'fs-5',
            confirmButton: 'fs-5'
        }
    });
}
    // Función para abrir el Modal de Registro de Cliente
    function abrirModalRegistroCliente() {
        var modal = new bootstrap.Modal(document.getElementById('registroClienteModal'));
        modal.show();
    }

    // Función para cerrar el Modal de Registro de Cliente
    function cerrarModalRegistroCliente() {
        var modal = bootstrap.Modal.getInstance(document.getElementById('registroClienteModal'));
        modal.hide();
        document.getElementById('form-registro-cliente').reset();
    }

    // Función para abrir el Modal de Edición de Cliente
    function abrirModalEditarCliente(cliente) {
    // Función auxiliar para manejar valores nulos o indefinidos
    const getValueOrEmpty = (value) => value !== null && value !== undefined ? value : '';
    
    document.getElementById('cliente_id').value = getValueOrEmpty(cliente.cliente_id);
    document.getElementById('edit_cliente_tipo_documento').value = getValueOrEmpty(cliente.cliente_tipo_documento);
    document.getElementById('edit_cliente_numero_documento').value = getValueOrEmpty(cliente.cliente_numero_documento);
    document.getElementById('edit_cliente_nombre').value = getValueOrEmpty(cliente.cliente_nombre);
    document.getElementById('edit_cliente_apellido').value = getValueOrEmpty(cliente.cliente_apellido);
    document.getElementById('edit_cliente_email').value = getValueOrEmpty(cliente.cliente_email);
    document.getElementById('edit_cliente_telefono').value = getValueOrEmpty(cliente.cliente_telefono);
    document.getElementById('edit_cliente_provincia').value = getValueOrEmpty(cliente.cliente_provincia);
    document.getElementById('edit_cliente_ciudad').value = getValueOrEmpty(cliente.cliente_ciudad);
    document.getElementById('edit_cliente_direccion').value = getValueOrEmpty(cliente.cliente_direccion);

    var modal = new bootstrap.Modal(document.getElementById('modal-editar-cliente'));
    modal.show();
}

    // Función para cerrar el Modal de Edición de Cliente
    function cerrarModalEditarCliente() {
        var modal = bootstrap.Modal.getInstance(document.getElementById('modal-editar-cliente'));
        modal.hide();
        $('#form-edicion-cliente')[0].reset();
    }

    // Función para cargar la lista de clientes
    function cargarClientes() {
        $.ajax({
            url: '<?= APP_URL ?>app/ajax/clienteAjax.php',
            type: 'POST',
            data: {
                modulo_cliente: 'listar'
            },
            success: function(response) {
                $('#lista-clientes').html(response);
            }
        });
    }

    // Manejador para el formulario de registro
// Manejador para el formulario de registro
$('#form-registro-cliente').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        url: '<?= APP_URL ?>app/ajax/clienteAjax.php',
        type: 'POST',
        data: $(this).serialize(),
        success: function(response) {
            try {
                const resp = JSON.parse(response);
                if (resp.tipo === "limpiar") {
                    cerrarModalRegistroCliente();
                    cargarClientes();
                    mostrarAlerta(resp.icono || 'success', resp.titulo, resp.texto);
                } else if (resp.tipo === "error") {
                    mostrarAlerta(resp.icono || 'error', resp.titulo, resp.texto);
                }
            } catch (e) {
                console.error("Error al parsear JSON:", e);
                mostrarAlerta('error', 'Error de respuesta', 'La respuesta del servidor no es válida');
            }
        },
        error: function(xhr, status, error) {
            console.error("Error AJAX:", { status: status, error: error, response: xhr.responseText });
            mostrarAlerta('error', 'Error de conexión', 'Hubo un problema al conectar con el servidor');
        }
    });
});


// Manejador para el formulario de edición
$('#form-edicion-cliente').on('submit', function(e) {
    e.preventDefault();
    const formData = $(this).serialize();
    $.ajax({
        url: '<?= APP_URL ?>app/ajax/clienteAjax.php',
        type: 'POST',
        data: formData,
        success: function(response) {
            try {
                const resp = JSON.parse(response);
                if (resp.tipo === "recargar") {
                    cerrarModalEditarCliente();
                    cargarClientes();
                    mostrarAlerta(resp.icono || 'success', resp.titulo, resp.texto);
                } else if (resp.tipo === "error") {
                    mostrarAlerta(resp.icono || 'error', resp.titulo, resp.texto);
                }
            } catch (e) {
                console.error("Error al parsear JSON:", e);
                mostrarAlerta('error', 'Error de respuesta', 'La respuesta del servidor no es válida');
            }
        },
        error: function(xhr, status, error) {
            console.error("Error AJAX:", { status: status, error: error, response: xhr.responseText });
            mostrarAlerta('error', 'Error de conexión', 'Hubo un problema al conectar con el servidor');
        }
    });
});

    // Función para eliminar un cliente
function eliminarCliente(id) {
    Swal.fire({
        title: '¿Está seguro?',
        text: "¿Desea eliminar este cliente?",
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
                url: '<?= APP_URL ?>app/ajax/clienteAjax.php',
                type: 'POST',
                data: {
                    modulo_cliente: 'eliminar',
                    cliente_id: id
                },
                success: function(response) {
                    try {
                        const resp = JSON.parse(response);
                        if (resp.tipo === "recargar") {
                            cargarClientes();
                            mostrarAlerta(resp.icono || 'success', resp.titulo, resp.texto);
                        } else if (resp.tipo === "error") {
                            mostrarAlerta(resp.icono || 'error', resp.titulo, resp.texto);
                        }
                    } catch (e) {
                        console.error("Error al parsear JSON:", e);
                        mostrarAlerta('error', 'Error de respuesta', 'La respuesta del servidor no es válida');
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error AJAX:", { status: status, error: error, response: xhr.responseText });
                    mostrarAlerta('error', 'Error de conexión', 'Hubo un problema al conectar con el servidor');
                }
            });
        }
    });
}
    // Cargar la lista de clientes al cargar la página
    $(document).ready(function() {
        cargarClientes();
    });
</script>