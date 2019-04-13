var contratoId = null;
$(document).ready(() => {
  buscarContratos();
});

$("#deletarContrato").on("click", () => {
  $("#modal-default").modal("hide");
  deletarContrato();
});

$;

function buscarContratos() {
  $.get(``).done(response => {
    contratos = JSON.parse(response);
    popularPesquisa(contratos, () => {
      $(".overlay").remove();
      table = $("#contratos").DataTable({ order: [0, "desc"] });
    });
  });
}

function popularPesquisa(contratos, callback = null) {
  $("#contratos tbody tr").remove();
  $.each(contratos, (index, contrato) => {
    var linha = `<tr id="${contrato.id}" class="clicavel">
            <td class="item" id="${contrato.id}">${
      contrato.numero_confirmacao
    }</td>
            <td class="item" id="${contrato.id}">${contrato.unidadeComprador
      .razao_social || "teste"}</td>
            <td class="item" id="${contrato.id}">${
      contrato.unidadeVendedor.razao_social
    }</td>
            <td class="item" id="${contrato.id}">${contrato.produto.nome}</td>
            <td class="download" style="text-align:center" id="${contrato.id}">
                <button type="button" class="btn btn-primary" id="${
                  contrato.id
                }">
                    <i class="fa fa-print" id="${contrato.id}"></i>
                </button>
            </td>
            <td class="delete" style="text-align:center" id="${contrato.id}">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-aviso">
                    <i class="fa fa-trash-o" ></i>
                </button>
            </td>
        </tr>`;

    $("#contratos tbody").append(linha);
  });
  $(`#contratos .item`).on("click", function() {
    irParaContratos(this.id);
  });
  $(`#contratos .download`).on("click", function(event) {
    console.log(event);
    abrirContrato(event.target.id);
  });
  $(`#contratos .delete`).on("click", function() {
    selecionarContrato(this.id);
  });
  callback ? callback() : "";
}

function selecionarContrato(ctId) {
  contratoId = ctId;
}

function abrirContrato(ctId) {
  window.open(`../back-end/pdfs/contratos/${ctId}`, "_blank");
}

function irParaContratos(contrato) {
  $.get(`../back-end/contratos/${contrato}/`, response => {
    contrato = JSON.parse(response);
    localStorage.setItem("contrato", JSON.stringify(contrato));
    $(location).attr("href", "contratos.php");
  });
}

function deletarContrato() {
  mostrarModal();
  $.ajax({
    url: `../back-end/contratos/${contratoId}`,
    type: "DELETE"
  })
    .done(() =>
      table
        .row($(`#${contratoId}`))
        .remove()
        .draw()
    )
    .always(() => esconderModal());
}

/**
 * UI
 */
function esconderModal() {
  $("#modal-aviso").modal("hide");
}

function mostrarModal() {
  $("#modal-aviso").modal({ backdrop: "static", keyboard: false });
}
