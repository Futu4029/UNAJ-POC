//Código para inicializar Datables.
$(document).ready(function() {
    tabla = $('#tabla').DataTable({
        "columnDefs": [{
            "targets": -1,
            "data": null,
            "defaultContent": "<div class='text-center'> <div class = 'btn-group'> <button class = 'btn btn-success btnAprobar'> Aprobar </button> <button class= 'btn btn-danger btnBorrar'> Borrar </button> </div> </div>"
        }],
        //para cambiar el lenguaje a español.
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "sProcessing": "Procesando...",
        }

    });
});

var fila;

/*Elimina la fila de la base de datos en la parte de validaciones.
 *REQ: La tabla debe tener al menos 4 columnas.
 */
$(document).on("click", ".btnBorrar", function() {
    fila = $(this);
    row1 = ($(this).closest("tr").find('td:eq(0)').text());
    row2 = ($(this).closest("tr").find('td:eq(1)').text());
    row3 = ($(this).closest("tr").find('td:eq(2)').text());
    row4 = ($(this).closest("tr").find('td:eq(3)').text());
    row5 = ($(this).closest("tr").find('td:eq(7)').text());
    Swal.fire({
        title: '¿Estas seguro?',
        text: "¡Esto no se puede revertir!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Si, eliminalo!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            $.post('../register/borrarRegistro.php', { row1, row2, row3, row4, row5 }, function(response) {
                tabla.row(fila.parents('tr')).remove().draw();
                console.log(response);
                Swal.fire(
                    '¡Eliminado!',
                    'El registro ha sido eliminado.',
                    'success'
                )
            });
        }
    });
});

/*Se me ocurrió muy sobre la fecha una idea para la aprobación, se podría generar un estado, no visible en las tablas
 *pero si en la base de datos. Este estado podría verse modificado con el boton de aprobar. Luego en la tabla de busqueda
 *con un SELECT * FROM "latabla" where estado != "aprobado". Entonces ya no se mostrarían más en la parte de validaciones
 *a menos que se aplique un filtro incluir a todos de nuevo.
 *De momento solo la hace invisible hasta que se recargue la página.
 */
$(document).on("click", ".btnAprobar", function() {
    fila = $(this);
    tabla.row(fila.parents('tr')).remove().draw();
    Swal.fire(
        '¡Aprobado!',
        'El registro ha sido Guardado.',
        'success'
    )
});