@extends('layouts.plantilla_general')

@section('title', 'Lista de Usuarios')

@section('contenido')

<div class="contenedor">

    <h1 class="title">Administración de Usuarios</h1>

    <table class="table table-striped" id="tabla-usuarios">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Puesto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->name }}</td>
                <td>{{ $usuario->email }}</td>
                <td>{{ $usuario->puesto }}</td>
                <td>
                    <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-sm btn-primary">Editar</a>
                    <form action="{{ route('usuarios.delete', $usuario->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('registrar-usuario') }}" class="btn btn-primary">
        Crear Nuevo Usuario
    </a>

    <div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditarLabel">Editar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formularioEdicion">
                        <input type="hidden" id="usuarioId" name="usuarioId">

                        <div class="mb-3">
                            <label for="txtNombre_Usuario" class="form-label">Nombre Completo:</label>
                            <input type="text" class="form-control" id="txtNombre_Usuario" name="txtNombre_Usuario">
                        </div>

                        <div class="mb-3">
                            <label for="txtCorreo_Usuario" class="form-label">Correo:</label>
                            <input type="email" class="form-control" id="txtCorreo_Usuario" name="txtCorreo_Usuario">
                        </div>

                        <div class="mb-3">
                            <label for="txtPuesto_Usuario" class="form-label">Puesto:</label>
                            <select class="select-dato" id="txtPuesto_Usuario" name="txtPuesto_Usuario">
                                <option selected disabled>Selecciona un rol</option>
                                <option value="1">Administrador</option>
                                <option value="2">Compra</option>
                                <option value="3">Venta</option>
                                <option value="4">Almacén</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="txtContrasena_Usuario" class="form-label">Contraseña:</label>
                            <input type="password" class="form-control" id="txtContrasena_Usuario" name="txtContrasena_Usuario">
                        </div>

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


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

$(document).ready(function () {
    // Función para cargar la lista de usuarios
    function cargarUsuarios() {
        $.ajax({
            url: '/obtener_usuarios',
            method: 'GET',
            success: function (usuarios) {
                var tablaUsuarios = $('#tabla-usuarios').DataTable();
                tablaUsuarios.clear().draw();

                for (var i = 0; i < usuarios.length; i++) {
                    var usuario = usuarios[i];
                    var fila = '<tr>';
                    fila += '<td>' + usuario.nombre_completo + '</td>';
                    fila += '<td>' + usuario.correo + '</td>';
                    fila += '<td>' + usuario.puesto + '</td>';
                    fila += '<td>';
                    fila += '<a href="#" class="btn btn-sm btn-primary btn-editar" data-id="' + usuario.id + '">Editar</a>';
                    fila += ' <a href="#" class="btn btn-sm btn-danger btn-eliminar" data-id="' + usuario.id + '">Eliminar</a>';
                    fila += '</td>';
                    fila += '</tr>';

                    tablaUsuarios.row.add(fila).draw();
                }
            },
            error: function () {
                console.error('Error al cargar la lista de usuarios');
            }
        });
    }

    cargarUsuarios();

    $('#tabla-usuarios').on('click', '.btn-editar', function () {
        var usuarioId = $(this).data('id');

        $.ajax({
            url: '/obtener_usuario_por_id',
            method: 'GET',
            data: {
                usuarioId: usuarioId
            },
            success: function (response) {
                var usuario = response.usuario;
                llenarFormularioEdicion(usuario);

                // Lógica para abrir la ventana modal de edición con el ID del usuario
                $('#modalEditar').modal('show');
            },
            error: function () {
                console.error('Error al obtener el usuario por ID');
            }
        });
    });

    $('#btnGuardarEdicion').click(function () {
        var usuarioId = $('#usuarioId').val();
        var nombreCompleto = $('#txtNombre_Usuario').val();
        var correo = $('#txtCorreo_Usuario').val();
        var puesto = $('#txtPuesto_Usuario').val();
        var contrasena = $('#txtContrasena_Usuario').val();

        // Lógica para enviar los datos del formulario de edición al servidor
        // Puedes usar AJAX para enviar los datos al servidor y actualizar la información del usuario
        // Ejemplo de cómo enviar los datos al servidor usando AJAX
        $.ajax({
            url: '/editar_usuario',
            method: 'POST',
            data: {
                usuarioId: usuarioId,
                nombreCompleto: nombreCompleto,
                correo: correo,
                puesto: puesto,
                contrasena: contrasena
            },
            success: function (response) {
                if (response.exito) {
                    Swal.fire({
                        title: 'Usuario Editado',
                        text: 'El usuario se ha editado correctamente.',
                        icon: 'success',
                        confirmButtonText: 'Cerrar'
                    });

                    // Recargar la tabla de usuarios
                    cargarUsuarios();

                    // Cerrar la ventana modal
                    $('#modalEditar').modal('hide');
                } else {
                    Swal.fire({
                        title: 'Error',
                        text: 'Se ha producido un error al editar el usuario.',
                        icon: 'error',
                        confirmButtonText: 'Cerrar'
                    });
                }
            },
            error: function () {
                Swal.fire({
                    title: 'Error',
                    text: 'Se ha producido un error al editar el usuario.',
                    icon: 'error',
                    confirmButtonText: 'Cerrar'
                });
            }
        });
    });

    $('#tabla-usuarios').on('click', '.btn-eliminar', function () {
        var usuarioId = $(this).data('id');

        // Lógica para eliminar el usuario usando AJAX
        // Ejemplo de cómo eliminar el usuario usando AJAX
        $.ajax({
            url: '/eliminar_usuario',
            method: 'DELETE',
            data: {
                usuarioId: usuarioId
            },
            success: function (response) {
                if (response.exito) {
                    Swal.fire({
                        title: 'Usuario Eliminado',
                        text: 'El usuario se ha eliminado correctamente.',
                        icon: 'success',
                        confirmButtonText: 'Cerrar'
                    });

                    // Recargar la tabla de usuarios
                    cargarUsuarios();
                } else {
                    Swal.fire({
                        title: 'Error',
                        text: 'Se ha producido un error al eliminar el usuario.',
                        icon: 'error',
                        confirmButtonText: 'Cerrar'
                    });
                }
            },
            error: function () {
                Swal.fire({
                    title: 'Error',
                    text: 'Se ha producido un error al eliminar el usuario.',
                    icon: 'error',
                    confirmButtonText: 'Cerrar'
                });
            }
        });
    });

    function cargarUsuarios() {
        $.ajax({
            url: '/obtener_usuarios',
            method: 'GET',
            success: function (usuarios) {
                var tablaUsuarios = $('#tabla-usuarios').DataTable();
                tablaUsuarios.clear().draw();

                for (var i = 0; i < usuarios.length; i++) {
                    var usuario = usuarios[i];
                    var fila = '<tr>';
                    fila += '<td>' + usuario.nombre_completo + '</td>';
                    fila += '<td>' + usuario.correo + '</td>';
                    fila += '<td>' + usuario.puesto + '</td>';
                    fila += '<td>';
                    fila += '<a href="#" class="btn btn-sm btn-primary btn-editar" data-id="' + usuario.id + '">Editar</a>';
                    fila += ' <a href="#" class="btn btn-sm btn-danger btn-eliminar" data-id="' + usuario.id + '">Eliminar</a>';
                    fila += '</td>';
                    fila += '</tr>';

                    tablaUsuarios.row.add(fila).draw();
                }
            },
            error: function () {
                console.error('Error al cargar la lista de usuarios');
            }
        });
    }

    function llenarFormularioEdicion(usuario) {
        $('#usuarioId').val(usuario.id);
        $('#txtNombre_Usuario').val(usuario.nombre_completo);
        $('#txtCorreo_Usuario').val(usuario.correo);
        $('#txtPuesto_Usuario').val(usuario.puesto);
        $('#txtContrasena_Usuario').val(usuario.contrasena);
    }

    function obtenerUsuarioPorId(usuarioId) {
        var usuario = null;

        $.ajax({
            url: '/obtener_usuario_por_id',
            method: 'GET',
            async: false,
            data: {
                usuarioId: usuarioId
            },
            success: function (response) {
                usuario = response.usuario;
            },
            error: function () {
                console.error('Error al obtener el usuario por ID');
            }
        });

        return usuario;
    }
});

$(document).ready(function () {
    $('#btnGuardar').click(function () {
        var nombreCompleto = $('#txtNombre_Usuario').val();
        var correo = $('#txtCorreo_Usuario').val();
        var puesto = $('#txtPuesto_Usuario').val();
        var contrasena = $('#txtContrasena_Usuario').val();

        // Lógica para enviar los datos del formulario de edición al servidor
        // Puedes usar AJAX para enviar los datos al servidor y actualizar la información del usuario
        // Ejemplo de cómo enviar los datos al servidor usando AJAX
        $.ajax({
            url: '/agregar_usuario',
            method: 'POST',
            data: {
                nombreCompleto: nombreCompleto,
                correo: correo,
                puesto: puesto,
                contrasena: contrasena
            },
            success: function (response) {
                if (response.exito) {
                    Swal.fire({
                        title: 'Usuario Agregado',
                        text: 'El usuario se ha agregado correctamente.',
                        icon: 'success',
                        confirmButtonText: 'Cerrar'
                    });

                    // Recargar la tabla de usuarios
                    cargarUsuarios();

                    // Cerrar la ventana modal
                    $('#modalAgregar').modal('hide');
                } else {
                    Swal.fire({
                        title: 'Error',
                        text: 'Se ha producido un error al agregar el usuario.',
                        icon: 'error',
                        confirmButtonText: 'Cerrar'
                    });
                }
            },
            error: function () {
                Swal.fire({
                    title: 'Error',
                    text: 'Se ha producido un error al agregar el usuario.',
                    icon: 'error',
                    confirmButtonText: 'Cerrar'
                });
            }
        });
    });

    function cargarUsuarios() {
        $.ajax({
            url: '/obtener_usuarios',
            method: 'GET',
            success: function (usuarios) {
                var tablaUsuarios = $('#tabla-usuarios').DataTable();
                tablaUsuarios.clear().draw();

                for (var i = 0; i < usuarios.length; i++) {
                    var usuario = usuarios[i];
                    var fila = '<tr>';
                    fila += '<td>' + usuario.nombre_completo + '</td>';
                    fila += '<td>' + usuario.correo + '</td>';
                    fila += '<td>' + usuario.puesto + '</td>';
                    fila += '<td>';
                    fila += '<a href="#" class="btn btn-sm btn-primary btn-editar" data-id="' + usuario.id + '">Editar</a>';
                    fila += ' <a href="#" class="btn btn-sm btn-danger btn-eliminar" data-id="' + usuario.id + '">Eliminar</a>';
                    fila += '</td>';
                    fila += '</tr>';

                    tablaUsuarios.row.add(fila).draw();
                }
            },
            error: function () {
                console.error('Error al cargar la lista de usuarios');
            }
        });
    }
});


