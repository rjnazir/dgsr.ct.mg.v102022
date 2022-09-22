$(function () {

    // Génération bordereau de livraison
    $('#btn-generate-utilisation-it').click(function(event) {
        ajaxGenerateFeuilleUsedIT();

        return false;
    });
})

$(function (){
    $('#btn-generate-stock-it').click(function (event){
        ajaxGenerateFeuilleStockIT();

        return false;
    });
})

$(function (){
    $('#btn-generate-new-stock-it').click(function (event){
        ajaxGenerateNewFeuilleStockIT();

        return false;
    });
})

$(function (){
    $('#btn-generate-nouvelle-fc').click(function (event){
        ajaxNewGenerateFeuilleDeCaisse();
        return false;
    });
})

/**
 * Ajax pour générer le bordereau de livraison
 */
function ajaxGenerateFeuilleUsedIT() {
    var _loading        = "<i class='fa-li fa fa-spinner fa-spin kl-spin'></i>";
    var _ct_fitu_date   = $('#ct_fitu_date').val();
    var _ct_fitu_centre = $('#ct_fitu_centre').val();

    $('#link-download-utilisation-it').show();
    $('#link-download-utilisation-it').html(_loading);
    $.ajax({
        type: "POST",
        url: _generate_used_it_ajax_uri,
        cache: false,
        data: { 'ct_centre_id' : _ct_fitu_centre, 'ct_fitu_date' : _ct_fitu_date},
        success: function(data) {

            var _link_download = "<a href='" + data.url_path + "' title='Télécharger' target='_blank' class='btn btn-success kl-download'>Télécharger</a>"

            $('#link-download-utilisation-it').html(_link_download);
        }
    });
}

/**
 *  Ajax pour générer la nouvelle version de feuille de caisse
 */
function ajaxNewGenerateFeuilleDeCaisse(){
    var _loading        = "<i class='fa-li fa fa-sprinner fa-spin kl-spin'></i>"
    var _ct_fitu_centre = $('#ct_fitu_centre').val();
    var _ct_fitu_date   = $('#ct_fitu_date').val();

    $('#link-download-new-feuille-de-caisse').show();
    $('#link-download-new-feuille-de-caisse').html(_loading);

    $.ajax({
        type:   "POST",
        url:    _generate_new_feuilledecaisse_uri,
        cache:  false,
        data:   { 'ct_centre_id': _ct_fitu_centre, 'ct_fitu_date': _ct_fitu_date},
        success:function(data) {
            
            var _link_download = "<a href='"+ data.url_path +"' title='Télécharger' targer='_blank' class='btn btn-success kl-download'>Télécharger</a>"

            $('#link-download-new-feuille-de-caisse').html(_link_download);
        }
    });
}

function ajaxGenerateFeuilleStockIT()
{
    var _loading        = "<i class='fa-li fa fa-spinner fa-spin kl-spin'></i>";
    var _ct_situ_date   = $('#ct_situ_date').val();
    var _ct_situ_centre = $('#ct_situ_centre').val();


    $('#link-download-stock-it').show();
    $('#link-download-stock-it').html(_loading);
    $.ajax({
        type: "POST",
        url: _generate_stock_it_ajax_uri,
        cache: false,
        data: { 'ct_centre_id' : _ct_situ_centre, 'ct_situ_date' : _ct_situ_date},
        success: function(data) {

            var _link_download = "<a href='" + data.url_path + "' title='Télécharger' target='_blank' class='btn btn-success kl-download'>Télécharger</a>"

            $('#link-download-stock-it').html(_link_download);
        }
    });
}

/* Fonction de traitement de nouvelle version feuille de stock */
function ajaxGenerateNewFeuilleStockIT ()
{
    var _loading = "<i class='fa-li fa fa-spinner fa-spin kl-spin'></i>";
    var ct_mois_stock = $('#ct_mois_stock').val();
    var ct_centre_id_stock = $('#ct_centre_id_stock').val();

    $('#link-download-new-stock-it').show();
    $('#link-download-new-stock-it').html(_loading);

    $.ajax({
        type: "POST",
        url: _generate_new_stok_it_ajax_uri,
        cache: false,
        data: {'ct_centre_id_stock': ct_centre_id_stock, 'ct_mois_stock': ct_mois_stock},
        success: function(data){
            var _link_download = "<a href='" + data.url_path + "' title='Télécharger' target='_blank' class='btn btn-success kl-download'>Télécharger</a>"
            $('#link-download-new-stock-it').html(_link_download);
        }
    });
}