$(function () {

    $("#ituMotifUsed").change(function () {
        var type_ct = $('#ituMotifUsed').val();
        check_ct_controle(type_ct);
    });

});

function check_ct_controle ()
{
    if(!is_null(type_ct)){
        $.ajax({
            type    :   'POST',
            url     :    _check_ct_controle_ids_ajax_uri,
            cache   :   false,
            data    :   { 'type_ct': type_ct},
            success : function(data){
                var _select = "<option value='' selected='selected'>Choisir</option>";
                for (var _i = 0; _i < data.length; _i++) {
                    var _controle = data[_i];
                    var _controle_id = _controle.id;
                    _select += "<option value='"+_controle_id+"'>"+_controle_id+"</option>";
                }
    
                $('#ctControle').html(_select);
            }
        })
    }
}