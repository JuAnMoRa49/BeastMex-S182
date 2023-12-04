@extends('layouts.plantilla_general')

@section('title', 'Lista de Productos')

@section('contenido')

<div class="contenedor">
    <h1 class="title">Almacenamiento</h1> <!-- Agrega el botón de Generar PDF -->
    <button type="button" class="btn btn-success" id="btn-generar-pdf">Generar PDF</button>


    @if(session()->has('confirmacion_regi_prod'))
    <script>
        mostrarNotificacion('{{ session('confirmacion_regi_prod') }}', 'success');
    </script>
@endif

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <div class="form">
        <!-- Agrega un botón para redirigir a la vista de registro -->

        <form id="form-filtro">
            <div class="mb-3">
                <label for="filtro-nombre" class="form-label">Filtrar por Nombre:</label>
                <input type="text" class="form-control" id="filtro-nombre" name="filtro-nombre">
            </div>
            <div class="mb-3">
                <label for="filtro-serie" class="form-label">Filtrar por No. Serie:</label>
                <input type="text" class="form-control" id="filtro-serie" name="filtro-serie">
            </div>
            <button type="button" class="btn btn-primary" id="btn-filtrar">Filtrar</button>
            <button type="button" class="btn btn-secondary" id="btn-reset">Limpiar Filtros</button>
        </form>

        <table class="table table-striped" id="tabla-productos">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>No. Serie</th>
                    <th>Marca</th>
                    <th>Cantidad</th>
                    <th>Costo</th>
                    <th>Precio de Venta</th>
                    <th>Fecha de Ingreso</th>
                    <th>Foto</th>
                    <th>Acciones</th> <!-- Nueva columna para botones de editar y eliminar -->
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditarLabel">Editar Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario de edición -->
                <form id="formularioEdicion">
                    <!-- Campo oculto para el ID del producto -->
                    <input type="hidden" id="productoId" name="productoId">

                    <!-- Campos de edición -->
                    <div class="mb-3">
                        <label for="txtNombre_Producto" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="txtNombre_Producto" name="txtNombre_Producto">
                    </div>

                    <div class="mb-3">
                        <label for="txtNoSerie_producto" class="form-label">No. Serie:</label>
                        <input type="number" class="form-control" id="txtNoSerie_producto" name="txtNoSerie_producto">
                    </div>

                    <div class="mb-3">
                        <label for="txtMarca_producto" class="form-label">Marca:</label>
                        <input type="text" class="form-control" id="txtMarca_producto" name="txtMarca_producto">
                    </div>

                    <div class="mb-3">
                        <label for="txtCantidad_producto" class="form-label">Cantidad:</label>
                        <input type="number" class="form-control" id="txtCantidad_producto" name="txtCantidad_producto">
                    </div>

                    <div class="mb-3">
                        <label for="txtCosto_producto" class="form-label">Costo:</label>
                        <input type="number" step="0.01" class="form-control" id="txtCosto_producto" name="txtCosto_producto">
                    </div>

                    <div class="mb-3">
                        <label for="txtFechaCompra_producto" class="form-label">Fecha de Compra:</label>
                        <input type="date" class="form-control" id="txtFechaCompra_producto" name="txtFechaCompra_producto">
                    </div>

                    <!-- Otros campos que desees editar -->

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="btnGuardarEdicion">Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>


</div>



<!-- Agrega esto al final de tu vista, antes de cerrar el cuerpo </body> -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/vfs_fonts.js"></script>







<script>
    $(document).ready(function () {
        // Copia original de los productos (sin filtrar)
        var productosOriginales = {!! json_encode($productos) !!};

        // Función para aplicar los filtros
        function aplicarFiltros() {
            var filtroNombre = $('#filtro-nombre').val().toLowerCase();
            var filtroSerie = $('#filtro-serie').val().toLowerCase();

            var productosFiltrados = productosOriginales.filter(function (producto) {
                return (
                    (filtroNombre === '' || producto.nombre_producto.toLowerCase().includes(filtroNombre)) &&
                    (filtroSerie === '' || producto.no_serie.toString().toLowerCase().includes(filtroSerie))
                );
            });

            mostrarProductos(productosFiltrados);
        }

        // Función para mostrar productos en la tabla
        function mostrarProductos(productos) {
            var tablaProductos = $('#tabla-productos tbody');
            tablaProductos.empty();

            if (productos.length === 0) {
                tablaProductos.append('<tr><td colspan="9" class="text-center">No hay productos que coincidan con los filtros</td></tr>');
            } else {
                productos.forEach(function (producto) {
                    var fila = `<tr>
                        <td>${producto.nombre_producto}</td>
                        <td>${producto.no_serie}</td>
                        <td>${producto.marca}</td>
                        <td>${producto.cantidad}</td>
                        <td>$${producto.costo_compra}</td>
                        <td>$${producto.precio_venta}</td>
                        <td>${producto.fecha_ingreso}</td>
                        <td>
                        <img src="{{ url('storage/') }}/${producto.foto}" alt="Foto del producto" class="img-thumbnail">
                        </td>
                        <td>
                            <button class="btn btn-info btn-editar" data-id="${producto.id}">Editar</button>
                            <button class="btn btn-danger btn-eliminar" data-id="${producto.id}">Eliminar</button>
                        </td>
                    </tr>`;
                    tablaProductos.append(fila);
                });
            }
        }

        // Evento para aplicar filtros al hacer clic en el botón "Filtrar"
        $('#btn-filtrar').on('click', function () {
            aplicarFiltros();
        });

        // Evento para limpiar filtros al hacer clic en el botón "Limpiar Filtros"
        $('#btn-reset').on('click', function () {
            $('#filtro-nombre, #filtro-serie').val('');
            aplicarFiltros();
        });
        $('#tabla-productos').on('click', '.btn-editar', function () {
    var productoId = $(this).data('id');

    // Lógica para cargar los detalles del producto usando AJAX y llenar el formulario de edición
    var producto = obtenerProductoPorId(productoId);

    // Ejemplo de cómo abrir el modal
    $('#modalEditar').modal('show');

    // Ejemplo de cómo cargar los detalles del producto en el formulario de edición
    llenarFormularioEdicion(producto);
});

function llenarFormularioEdicion(producto) {
    // Obtener referencias a los campos del formulario
    var productoIdInput = $('#productoId');
    var nombreProductoInput = $('#txtNombre_Producto');
    var noSerieInput = $('#txtNoSerie_producto');
    var marcaInput = $('#txtMarca_producto');
    var cantidadInput = $('#txtCantidad_producto');
    var costoInput = $('#txtCosto_producto');
    var fechaCompraInput = $('#txtFechaCompra_producto');
    

    // Llenar los campos del formulario con los detalles del producto
    productoIdInput.val(producto.id);
    nombreProductoInput.val(producto.nombre_producto);
    noSerieInput.val(producto.no_serie);
    marcaInput.val(producto.marca);
    cantidadInput.val(producto.cantidad);
    costoInput.val(producto.costo_compra);
    fechaCompraInput.val(producto.fecha_ingreso);
   

    // Puedes agregar más campos según sea necesario
}

    


    $('#btn-generar-pdf').on('click', function () {
            // Crear un array de arrays con los datos de la tabla
            var data = [];
            data.push(['Nombre', 'No. Serie', 'Marca', 'Cantidad', 'Costo', 'Precio de Venta', 'Fecha de Ingreso']);

            // Agregar los datos de los productos al array
            productosOriginales.forEach(function (producto) {
                data.push([
                    producto.nombre_producto,
                    producto.no_serie,
                    producto.marca,
                    producto.cantidad,
                    `$${producto.costo_compra}`,
                    `$${producto.precio_venta}`,
                    producto.fecha_ingreso,
                ]);
            });

            // Definir el documento PDF
            var docDefinition = {
                content: [
                    { text: 'Lista de Productos', style: 'header' },
                    {
                        table: {
                            headerRows: 1,
                            body: data
                        }
                    }
                ],
                styles: {
                    header: {
                        fontSize: 18,
                        bold: true,
                        margin: [0, 0, 0, 10]
                    }
                }
            };

            // Generar el PDF
            pdfMake.createPdf(docDefinition).download('Informe_Productos.pdf');
        });









    $('#tabla-productos').on('click', '.btn-editar', function () {
    var productoId = $(this).data('id');
    // Lógica para abrir la ventana modal de edición con el ID del producto
    // Puedes cargar los detalles del producto usando AJAX y llenar el formulario de edición

    // Ejemplo de cómo abrir el modal
    $('#modalEditar').modal('show');

    // Ejemplo de cómo cargar los detalles del producto en el formulario de edición
    var producto = obtenerProductoPorId(productoId);
    llenarFormularioEdicion(producto);
    });
    $('#btnGuardarEdicion').on('click', function () {
    // Obtener los datos del formulario de edición
    var productoId = $('#productoId').val(); // Asegúrate de tener un campo oculto en tu formulario con el ID del producto
    var datosEdicion = {
        'txtNombre_Producto': $('#txtNombre_Producto').val(),
        'txtNoSerie_producto': $('#txtNoSerie_producto').val(),
        'txtMarca_producto': $('#txtMarca_producto').val(),
        'txtCantidad_producto': $('#txtCantidad_producto').val(),
        'txtCosto_producto': $('#txtCosto_producto').val(),
        'txtFechaCompra_producto': $('#txtFechaCompra_producto').val(),
        // ... otros campos que desees actualizar
    };

    // Enviar la solicitud AJAX al servidor para actualizar el producto
    $.ajax({
        url: '{{ url("/actualizar-producto/") }}' + '/' + productoId,
        type: 'PUT', // Utiliza el método PUT para actualizar
        data: datosEdicion,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            // Cerrar el modal después de la actualización
            $('#modalEditar').modal('hide');
            // Actualizar la lista de productos
            cargarProductos();
            // Mostrar una notificación de éxito
            mostrarNotificacion('Producto actualizado correctamente', 'success');
        },
        error: function (error) {
            console.error(error);
        }
    });
});

$('#tabla-productos').on('click', '.btn-eliminar', function () {
    var productoId = $(this).data('id');

    $.ajax({
        url: '/eliminar-producto/' + productoId,
        type: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            console.log(data);

            // Elimina la fila de la tabla directamente
            $('#tabla-productos').find(`[data-id="${productoId}"]`).closest('tr').remove();

            // Muestra una notificación de éxito
            mostrarNotificacion('Producto eliminado correctamente', 'success');
        },
        error: function (error) {
            console.error('Error:', error);

            // Show the error message using SweetAlert or console.log
            mostrarNotificacion('Error: ' + error.responseText, 'error');
        }
    });
});

    // Función para eliminar el producto por ID
    function eliminarProducto(productoId) {
    $.ajax({
        url: '/eliminar-producto/' + productoId,
        type: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            console.log(data);

            // Elimina la fila de la tabla directamente
            $('#tabla-productos').find(`[data-id="${productoId}"]`).closest('tr').remove();

            // Muestra una notificación de éxito
            mostrarNotificacion('Producto eliminado correctamente', 'success');
        },
        error: function (error) {
            console.error(error);
        }
    });
}

// Función para cargar la lista de productos después de eliminar
function cargarProductos() {
    $.ajax({
        url: '/lista_productos',
        type: 'GET',
        success: function (productos) {
    console.log(productos); // Imprime el contenido en la consola
    mostrarProductos(productosOriginales);
},
error: function (error) {
    console.error('Error al obtener la lista de productos:', error);
}

    });
}
// Función para mostrar notificación con SweetAlert
function mostrarNotificacion(mensaje, tipo) {
    Swal.fire({
        title: 'Buen Trabajo!',
        text: mensaje,
        icon: tipo,
        confirmButtonText: 'OK'
    });
}

// Función para obtener un producto por ID (simulación, ajusta según tu lógica)
function obtenerProductoPorId(id) {
    // Simulamos una lista de productos
    var productos = {!! json_encode($productos) !!};
    // Buscamos el producto por ID
    return productos.find(function (producto) {
        return producto.id === id;
    });
}

// Función para llenar el formulario de edición con los detalles del producto




        // Mostrar todos los productos al cargar la página
        mostrarProductos(productosOriginales);
    });
</script>



@endsection