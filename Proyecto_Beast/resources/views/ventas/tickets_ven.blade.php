<!-- resources/views/tickets_ven.blade.php -->
@extends('layouts.plantilla_general')

@section('title', 'Lista de Ticket Ventas')

@section('contenido')

<div class="container">
    <h1 style="text-align: center;">Lista de Ticket Ventas</h1>
    
    <button type="button" class="btn btn-success" id="btn-generar-pdf-tickets-ven">Generar PDF</button>

    <form id="form-filtro">
        <div class="mb-3">
            <label for="datos_cliente" class="form-label">Filtrar por Nombre:</label>
            <input type="text" class="form-control" id="datos_cliente" name="datos_cliente">
        </div>
        <div class="mb-3">
            <label for="productos" class="form-label">Filtrar por Producto :</label>
            <input type="text" class="form-control" id="productos" name="productos">
        </div>
        <div class="mt-4">
    <h3>Suma Total de Ganancias: <span id="suma-total-ganancias">0.00</span></h3>
</div>
<div class="mt-4">
    <h3>Ventas en los Últimos 30 Días: <span id="ventas-ultimos-30-dias">Aún no completa el mes</span></h3>
</div>


        <button type="button" class="btn btn-primary" id="btn-filtrar">Filtrar</button>
        <button type="button" class="btn btn-secondary" id="btn-reset">Limpiar Filtros</button>
    </form>

    <table class="table" id="tabla-tickets-ven">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha</th>
                <th>Cliente</th>
                <th>Productos</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Ganancia</th> 
            </tr>
        </thead>
        <tbody>
            @foreach($tickets_ven as $ticket)
                <tr>
                    <td>{{ $ticket->id }}</td>
                    <td>{{ $ticket->fecha }}</td>
                    <td>{{ $ticket->datos_cliente }}</td>
                    <td>{{ $ticket->productos }}</td>
                    <td>{{ $ticket->cantidad }}</td>
                    <td>{{ $ticket->precio }}</td>
                    <td class="ganancia"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Agrega el script para la generación de PDF y el filtrado -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/vfs_fonts.js"></script>

<script>
    // Copia original de los tickets de venta (sin filtrar)
    var ticketsOriginales = {!! json_encode($tickets_ven) !!};

    $(document).ready(function () {
        // Función para aplicar los filtros
        function aplicarFiltros() {
            var filtroCliente = $('#datos_cliente').val().toLowerCase();
            var filtroProducto = $('#productos').val().toLowerCase();

            var ticketsFiltrados = ticketsOriginales.filter(function (ticket) {
                return (
                    (filtroCliente === '' || ticket.datos_cliente.toLowerCase().includes(filtroCliente)) &&
                    (filtroProducto === '' || ticket.productos.toLowerCase().includes(filtroProducto))
                );
            });

            mostrarTicketsVentas(ticketsFiltrados);
        }

        // Función para mostrar tickets de venta en la tabla
// Función para mostrar tickets de venta en la tabla
// Función para mostrar tickets de venta en la tabla
function mostrarTicketsVentas(tickets) {
    var tablaTickets = $('#tabla-tickets-ven tbody');
    tablaTickets.empty();
    
    var sumaTotalGanancias = 0;

    if (tickets.length === 0) {
        tablaTickets.append('<tr><td colspan="7" class="text-center">No hay tickets de venta que coincidan con los filtros</td></tr>');
    } else {
        tickets.forEach(function (ticket) {
            var ganancia = parseFloat(ticket.precio) * 0.55;
            sumaTotalGanancias += ganancia;

            var fila = `<tr>
                <td>${ticket.id}</td>
                <td>${ticket.fecha}</td>
                <td>${ticket.datos_cliente}</td>
                <td>${ticket.productos}</td>
                <td>${ticket.cantidad}</td>
                <td>${ticket.precio}</td>
                <td class="ganancia">${ganancia.toFixed(2)}</td>
            </tr>`;
            tablaTickets.append(fila);
        });
    }

    // Actualizar la suma total de ganancias en el elemento HTML
    $('#suma-total-ganancias').text(sumaTotalGanancias.toFixed(2));
}


// ... Resto del código ...


        // Evento para aplicar filtros al hacer clic en el botón "Filtrar"
        $('#btn-filtrar').on('click', function () {
            aplicarFiltros();
        });

        // Evento para limpiar filtros al hacer clic en el botón "Limpiar Filtros"
        $('#btn-reset').on('click', function () {
            $('#datos_cliente, #productos').val('');
            aplicarFiltros();
        });

        // Mostrar todos los tickets de venta al cargar la página
        mostrarTicketsVentas(ticketsOriginales);
    });
</script>

<script>
    // Evento para generar el PDF al hacer clic en el botón "Generar PDF"
    $('#btn-generar-pdf-tickets-ven').on('click', function () {
        Swal.fire({
            title: 'Generar PDF',
            text: '¿Deseas generar un PDF para un ticket específico o para todos los tickets?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Todos',
            cancelButtonText: 'Específico'
        }).then((result) => {
            if (result.isConfirmed) {
                generarPDFTodos();
            } else {
                // Lógica para generar PDF de un ticket específico
                Swal.fire({
                    title: 'Generar PDF',
                    text: 'Ingresa el ID del ticket para generar el PDF:',
                    input: 'text',
                    inputAttributes: {
                        autocapitalize: 'off'
                    },
                    showCancelButton: true,
                    confirmButtonText: 'Generar',
                    showLoaderOnConfirm: true,
                    preConfirm: (ticketId) => {
                        return new Promise((resolve) => {
                            // Lógica para obtener el ticket específico y generar el PDF
                            var ticketEspecifico = obtenerTicketEspecifico(ticketId);
                            generarPDFEspecifico(ticketEspecifico);
                            resolve();
                        });
                    }
                });
            }
        });
    });

    // Función para generar PDF de todos los tickets
    function generarPDFTodos() {
        var data = [];
        data.push(['ID', 'Fecha', 'Cliente', 'Productos', 'Cantidad', 'Precio']);

        @foreach($tickets_ven as $ticket)
            data.push([
                '{{ $ticket->id }}',
                '{{ $ticket->fecha }}',
                '{{ $ticket->datos_cliente }}',
                '{{ $ticket->productos }}',
                '{{ $ticket->cantidad }}',
                '{{ $ticket->precio }}'
            ]);
        @endforeach

        var docDefinition = {
            content: [
                { text: 'Lista de Ticket Ventas', style: 'header' },
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

        pdfMake.createPdf(docDefinition).download('Informe_Ticket_Ventas.pdf');
    }

    // Función para obtener un ticket específico por ID
    function obtenerTicketEspecifico(ticketId) {
        // Lógica para obtener el ticket específico del arreglo de ticketsOriginales
        var ticketEspecifico = ticketsOriginales.find(ticket => ticket.id == ticketId);
        return ticketEspecifico;
    }

    // Función para generar PDF de un ticket específico
    function generarPDFEspecifico(ticket) {
        if (ticket) {
            var data = [];
            data.push(['ID', 'Fecha', 'Cliente', 'Productos', 'Cantidad', 'Precio']);

            data.push([
                ticket.id,
                ticket.fecha,
                ticket.datos_cliente,
                ticket.productos,
                ticket.cantidad,
                ticket.precio
            ]);

            var docDefinition = {
                content: [
                    { text: 'Ticket de Venta - ID ' + ticket.id, style: 'header' },
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

            pdfMake.createPdf(docDefinition).download('Ticket_Venta_' + ticket.id + '.pdf');
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'No se encontró un ticket con el ID proporcionado.'
            });
        }
    }

    mostrarTicketsVentas(ticketsOriginales);

// Mostrar las ventas en los últimos 30 días
mostrarVentasUltimos30Dias();
</script>

@endsection
