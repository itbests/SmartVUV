/* Crear nuevo registro */
$.fn.dataTable.ext.buttons.newRecord = {
    text: 'newRecord',
    action: function ( e, dt, node, config ) {
        alert('New record');
    }
};

/* Limpia campos del formulario respectivo */
function resetForm() {
    $('#frm_update')[0].reset();

    $('#divModule_id').removeClass('has-error');
    $('#divDivision').removeClass('has-error');
    $('#divMessage').removeClass('has-error');
    $('#divCause').removeClass('has-error');
    $('#divSolution').removeClass('has-error');
    $('#divParams').removeClass('has-error');

    $('#module_id-error').empty();
    $('#division-error').empty();
    $('#message-error').empty();
    $('#cause-error').empty();
    $('#solution-error').empty();
    $('#params-error').empty();
}

/* Despliega modal con información del dato seleccionado (show) */
$(document).on('click', '.show-modal', function() {
    //resetForm();
    var url = $(this).data().url;
    $.get(url,
        function(data){
            var operatingUnit = JSON.parse(data);
            console.log(operatingUnit);
            /*
            $('#show_id').val(operatingUnit.id);
            $('#show_name_').val(operatingUnit.name_);
            $('#show_type').val(operatingUnit.type);
            $('#show_value').val(operatingUnit.value);
            $('#show_module_id').val(operatingUnit.module);
            $('#show_division').val(operatingUnit.division);
            */
        }
    );
    $('#showModal').modal('show');
});

/* Despliega modal en modo de edición del dato seleccionado (edit) */
$(document).on('click', '.edit-modal', function() {
    //resetForm();
    var url = $(this).data().url;
    $.get(url,
        function(data){
            var operatingUnit = JSON.parse(data);
            console.log(operatingUnit);
            /*
            $('#id').val(message.id);
            $('#module_id').val(message.module_id);
            $('#division').val(message.division);
            $('#message').val(message.message);
            $('#cause').val(message.cause);
            $('#solution').val(message.solution);
            $('#params').val(message.params);
            */
        }
    );
    $('#editModal').modal('show');
});
$('.modal-footer').on('click', '.edit', function() {
    $.ajax({
        type: 'PUT',
        url: 'message/' + id,
        data: {
            '_token': $('input[name=_token]').val(),
            'id': $('#id').val(),
            'module_id': $('#module_id').val(),
            'division': $('#division').val(),
            'message': $('#message').val(),
            'cause': $('#cause').val(),
            'solution': $('#solution').val(),
            'params': $('#params').val()
        },
        success: function(data) {
            if (data.errors) {
                setTimeout(function () {
                    $('#editModal').modal('show');
                    toastr.error(data.message_process, data.message_title, {timeOut: 5000});
                }, 500);
                if (data.errors.module_id) {
                    $('#divModule_id').addClass('has-error');
                    $('#module_id-error' ).html( data.errors.module_id[0] );
                }
                if (data.errors.division) {
                    $('#divDivision').addClass('has-error');
                    $('#division-error').html(data.errors.division[0]);
                }
                if (data.errors.message) {
                    $('#divMessage').addClass('has-error');
                    $('#message-error').html(data.errors.message[0]);
                }
                if (data.errors.cause) {
                    $('#divCause').addClass('has-error');
                    $('#cause-error').html(data.errors.cause[0]);
                }
                if (data.errors.solution) {
                    $('#divSolution').addClass('has-error');
                    $('#solution-error').html(data.errors.solution[0]);
                }
                if (data.errors.params) {
                    $('#divParams').addClass('has-error');
                    $('#params-error').html(data.errors.params[0]);
                }
            } else {
                var message = JSON.parse(data);
                toastr.success(message.message_process, message.message_title, {timeOut: 5000});
                $('#editModal').modal('toggle');

                //Cargamos el contenido del enlace
                var link = 'message';
                 $('#page-wrapper').load(link);
            }
        }
    });
});
