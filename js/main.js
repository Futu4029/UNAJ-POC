$('#form-login').submit(function(e) {
    e.preventDefault();
    var usuario = $.trim($("#usuario").val());
    var password = $.trim($("#password").val());

    if (usuario.length == 0 || password.length == 0) {
        Swal.fire({
            icon: 'warning',
            title: 'Ingrese un usuario o password'
        });
        return false;

    } else {
        Swal.fire({
            icon: 'success',
            title: 'Bienvenido',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Ingresar'
        }).then((result) => {
            if (result.value) {
                window.location.href = '../approve/aprobarDatos.php'
            }
        });


    };
});

$(document).ready(function() {
    $('#tabla').DataTable({
        //para cambiar el lenguaje a español
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