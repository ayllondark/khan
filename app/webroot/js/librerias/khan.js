$(document).ready(function() {

    llenaCursos();

});

function llenaCursos() {

    try {
        var formData = new FormData();
        formData.append("acc", "cargar_cursos");
        $.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            url: "../../pamervirtual/app/View/Estudioencasa/data.php",
            data: formData,
            success: function(data) {
                var html = "";
                if (data.length > 0) {
                    var html = "";
                    var j = 0;
                    var x = 0;
                    var valores = JSON.parse(data);
                    console.log(valores);
                    var primero = valores[0].curso;
                    var seg = "";
                    var content2 = "";
                    $.each(valores, function(i, item) {
                        j++;

                        html = html + '<div class="col-md-6 col-sm-6 col-xs-12 card_cursos">' +
                            '<h1>' + item.curso + '</h1>' +
                            '<div id="card_cursos">' +
                            '<div class="conttemas">' +
                            '<div class="conttemas">' +
                            '<div class="stepV completed">' +
                            '<div class="v-stepper">' +
                            '<div class="circle"></div>' +
                            '<div class="lineV"></div>' +
                            '</div>' +
                            '<div class="contentstepV">' +
                            '<a href="#" onClick="cargar_archivo(\'' + item.archivo + '\')">' + item.unidad + '</a>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>'
                    });
                    $('#contenido_cursos').html(html);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                $("#info").show();
                $("#info").html("<div class='alert alert-danger'><strong>Error: </strong>Ha Ocurrido un error</div>");
            }
        });
    } catch (e) {
        $("#info").show();
        $("#info").html("<div class='alert alert-danger'><strong>Error: </strong>Ha Ocurrido un error</div>");
        return false;
    }

}


function htmlEscape(str) {
    return str
        .replace(/&/g, '&amp;')
        .replace(/"/g, '&quot;')
        .replace(/'/g, '&#39;')
        .replace(/\n/g, '<br>')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;');
}