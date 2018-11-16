$("#formulario").submit(function (event) {
    event.preventDefault();
    enviar();
});


function exibirLoader() {
    $("#loader").css('display', 'block');
}

function fecharLoader() {
    $("#loader").css('display', 'none');
}
function enviar() {
    var dados = $('#produtos').serialize();
    exibirLoader();
    $.ajax({
        type: 'POST',
        url: '../back-end/produtos',
        data: dados,
        dataType: 'json',
        success: function () {
            buscar();
        }
    });
}

function buscar() {
    $.ajax({
        url: "../back-end/produtos",
        type: "get",
        dataType: "json",
        success: function (produtos) {
            popular(produtos);
            buscarTipos();
        }
    });
}
function buscarTipos() {
    $.ajax({
        url: "../back-end/produtos/tipos",
        type: "get",
        dataType: "json",
        success: function (tipos) {
            popularTipos(tipos);
        }
    });
}

function popular(produtos) {
    $('#produtos_lista .item').remove();
    for (const produto of produtos) {
        var newRow = $("<tr class='item'>");
        var cols = "";
        cols += `<td>${produto.nome}</td>`;
        cols += `<td>${produto.tipo.definicao}</td>`;
        newRow.append(cols);
        $("#produtos_lista").append(newRow)
    }
}

function filtrar() {
    $(document).ready(function () {
        $("#filtro").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#produtos tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
}

function popularTipos(tipos) {
    $.each(tipos, function (index, tipo) {
        var option = '<option value="' + tipo.id + '">' + tipo.definicao + '</option>';
        $("#tipos").append(option)
    })
}