import * as variables from "../../../environments/variables";

$.ajaxSetup({
  headers: {
    "Content-Type": "application/json",
    "X-Requested-With": "XMLHttpRequest",
    Accept: "application/json"
  }
});

var contratoId = null;
var contratos;
var table;

$(document).ready(() => {
  buscarContratos();
});

$("#deletarContrato").on("click", () => {
  $("#modal-default").modal("hide");
  deletarContrato();
});

$;

function buscarContratos() {
  $.get(`${variables.variable()[0].url}contratos`).done(response => {
    contratos = response;
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
            <td class="item" id="${contrato.id}">
            ${contrato.unidade_comprador.razao_social}</td>
            <td class="item" id="${contrato.id}">${
      contrato.unidade_vendedor.razao_social
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
  window.open(`${variables.variable()[0].url}pdfs/contratos/${ctId}`, "_blank");
}

function irParaContratos(contrato) {
  $.get(`${variables.variable()[0].url}contratos/${contrato}`, response => {
    contrato = response;
    localStorage.setItem("contrato", JSON.stringify(contrato));
    $(location).attr("href", "contratos.php");
  });
}

function deletarContrato() {
  mostrarModal();
  $.ajax({
    url: `${variables.variable()[0].url}contratos/${contratoId}`,
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
