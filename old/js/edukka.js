     
     function carrega() {
         $('#AlunosLE').bootstrapToggle('on');
         $('#AlunosLE').bootstrapToggle('off');
         $('#AlunosIN').bootstrapToggle('on');
         $('#AlunosIN').bootstrapToggle('off');
         $('#AlunosAL').bootstrapToggle('on');
         $('#AlunosAL').bootstrapToggle('off');
         $('#AlunosEX').bootstrapToggle('on');
         $('#AlunosEX').bootstrapToggle('off');

         $('#ResponsaveisLE').bootstrapToggle('on');
         $('#ResponsaveisLE').bootstrapToggle('off');
         $('#ResponsaveisIN').bootstrapToggle('on');
         $('#ResponsaveisIN').bootstrapToggle('off');
         $('#ResponsaveisAL').bootstrapToggle('on');
         $('#ResponsaveisAL').bootstrapToggle('off');
         $('#ResponsaveisEX').bootstrapToggle('on');
         $('#ResponsaveisEX').bootstrapToggle('off');

         $('#CantinaLE').bootstrapToggle('on');
         $('#CantinaLE').bootstrapToggle('off');
         $('#CantinaIN').bootstrapToggle('on');
         $('#CantinaIN').bootstrapToggle('off');
         $('#CantinaAL').bootstrapToggle('on');
         $('#CantinaAL').bootstrapToggle('off');
         $('#CantinaEX').bootstrapToggle('on');
         $('#CantinaEX').bootstrapToggle('off');

         $('#FrequenciaLE').bootstrapToggle('on');
         $('#FrequenciaLE').bootstrapToggle('off');
         $('#FrequenciaIN').bootstrapToggle('on');
         $('#FrequenciaIN').bootstrapToggle('off');
         $('#FrequenciaAL').bootstrapToggle('on');
         $('#FrequenciaAL').bootstrapToggle('off');
         $('#FrequenciaEX').bootstrapToggle('on');
         $('#FrequenciaEX').bootstrapToggle('off');

         $('#ColaboradoresLE').bootstrapToggle('on');
         $('#ColaboradoresLE').bootstrapToggle('off');
         $('#ColaboradoresIN').bootstrapToggle('on');
         $('#ColaboradoresIN').bootstrapToggle('off');
         $('#ColaboradoresAL').bootstrapToggle('on');
         $('#ColaboradoresAL').bootstrapToggle('off');
         $('#ColaboradoresEX').bootstrapToggle('on');
         $('#ColaboradoresEX').bootstrapToggle('off');

         $('#CentroDeCustosLE').bootstrapToggle('on');
         $('#CentroDeCustosLE').bootstrapToggle('off');
         $('#CentroDeCustosIN').bootstrapToggle('on');
         $('#CentroDeCustosIN').bootstrapToggle('off');
         $('#CentroDeCustosAL').bootstrapToggle('on');
         $('#CentroDeCustosAL').bootstrapToggle('off');
         $('#CentroDeCustosEX').bootstrapToggle('on');
         $('#CentroDeCustosEX').bootstrapToggle('off');

         $('#SenhasUsuarioLE').bootstrapToggle('on');
         $('#SenhasUsuarioLE').bootstrapToggle('off');
         $('#SenhasUsuarioIN').bootstrapToggle('on');
         $('#SenhasUsuarioIN').bootstrapToggle('off');
         $('#SenhasUsuarioAL').bootstrapToggle('on');
         $('#SenhasUsuarioAL').bootstrapToggle('off');
         $('#SenhasUsuarioEX').bootstrapToggle('on');
         $('#SenhasUsuarioEX').bootstrapToggle('off');

         $('#AvisosLE').bootstrapToggle('on');
         $('#AvisosLE').bootstrapToggle('off');
         $('#AvisosIN').bootstrapToggle('on');
         $('#AvisosIN').bootstrapToggle('off');
         $('#AvisosAL').bootstrapToggle('on');
         $('#AvisosAL').bootstrapToggle('off');
         $('#AvisosEX').bootstrapToggle('on');
         $('#AvisosEX').bootstrapToggle('off');


         $('#GradeDeHorariosLE').bootstrapToggle('on');
         $('#GradeDeHorariosLE').bootstrapToggle('off');
         $('#GradeDeHorariosIN').bootstrapToggle('on');
         $('#GradeDeHorariosIN').bootstrapToggle('off');
         $('#GradeDeHorariosAL').bootstrapToggle('on');
         $('#GradeDeHorariosAL').bootstrapToggle('off');
         $('#GradeDeHorariosEX').bootstrapToggle('on');
         $('#GradeDeHorariosEX').bootstrapToggle('off');

         $('#DadosLE').bootstrapToggle('on');
         $('#DadosLE').bootstrapToggle('off');
         $('#DadosIN').bootstrapToggle('on');
         $('#DadosIN').bootstrapToggle('off');
         $('#DadosAL').bootstrapToggle('on');
         $('#DadosAL').bootstrapToggle('off');
         $('#DadosEX').bootstrapToggle('on');
         $('#DadosEX').bootstrapToggle('off');

         $('#AplicativosLE').bootstrapToggle('on');
         $('#AplicativosLE').bootstrapToggle('off');
         $('#AplicativosIN').bootstrapToggle('on');
         $('#AplicativosIN').bootstrapToggle('off');
         $('#AplicativosAL').bootstrapToggle('on');
         $('#AplicativosAL').bootstrapToggle('off');
         $('#AplicativosEX').bootstrapToggle('on');
         $('#AplicativosEX').bootstrapToggle('off');


         $('#AjudaLE').bootstrapToggle('on');
         $('#AjudaLE').bootstrapToggle('off');
         $('#AjudaIN').bootstrapToggle('on');
         $('#AjudaIN').bootstrapToggle('off');
         $('#AjudaAL').bootstrapToggle('on');
         $('#AjudaAL').bootstrapToggle('off');
         $('#AjudaEX').bootstrapToggle('on');
         $('#AjudaEX').bootstrapToggle('off');


         $('#DownloadsLE').bootstrapToggle('on');
         $('#DownloadsLE').bootstrapToggle('off');
         $('#DownloadsIN').bootstrapToggle('on');
         $('#DownloadsIN').bootstrapToggle('off');
         $('#DownloadsAL').bootstrapToggle('on');
         $('#DownloadsAL').bootstrapToggle('off');
         $('#DownloadsEX').bootstrapToggle('on');
         $('#DownloadsEX').bootstrapToggle('off');


     }
        
function setValue(id,newvalue) {
    var s= document.getElementById(id);
    s.value = newvalue;

}

// funcao de controle 
function controle() {
    alert("Edukka");
}

// mudando o estado do botão via código
function setStatusButton(id, value) {
    $('#'+id).bootstrapToggle(value);
    return false;
}

        
function foo() {

    // 
    
    $('#AlunosLE').change(function () { document.getElementById('TxtAlunosLE').value = $(this).prop('checked'); return false; });
    $('#AlunosIN').change(function () { document.getElementById('TxtAlunosIN').value = $(this).prop('checked'); return false; });
    $('#AlunosAL').change(function () { document.getElementById('TxtAlunosAL').value = $(this).prop('checked'); return false; });
    $('#AlunosEX').change(function () { document.getElementById('TxtAlunosEX').value = $(this).prop('checked'); return false; });
    $('#ResponsaveisLE').change(function () { document.getElementById('TxtResponsaveisLE').value = $(this).prop('checked'); return false; });
    $('#ResponsaveisIN').change(function () { document.getElementById('TxtResponsaveisIN').value = $(this).prop('checked'); return false; });
    $('#ResponsaveisAL').change(function () { document.getElementById('TxtResponsaveisAL').value = $(this).prop('checked'); return false; });
    $('#ResponsaveisEX').change(function () { document.getElementById('TxtResponsaveisEX').value = $(this).prop('checked'); return false; });
    $('#CantinaLE').change(function () { document.getElementById('TxtCantinaLE').value = $(this).prop('checked'); return false; });
    $('#CantinaIN').change(function () { document.getElementById('TxtCantinaIN').value = $(this).prop('checked'); return false; });
    $('#CantinaAL').change(function () { document.getElementById('TxtCantinaAL').value = $(this).prop('checked'); return false; });
    $('#CantinaEX').change(function () { document.getElementById('TxtCantinaEX').value = $(this).prop('checked'); return false; });
    $('#FrequenciaLE').change(function () { document.getElementById('TxtFrequenciaLE').value = $(this).prop('checked'); return false; });
    $('#FrequenciaIN').change(function () { document.getElementById('TxtFrequenciaIN').value = $(this).prop('checked'); return false; });
    $('#FrequenciaAL').change(function () { document.getElementById('TxtFrequenciaAL').value = $(this).prop('checked'); return false; });
    $('#FrequenciaEX').change(function () { document.getElementById('TxtFrequenciaEX').value = $(this).prop('checked'); return false; });
    $('#ColaboradoresLE').change(function () { document.getElementById('TxtColaboradoresLE').value = $(this).prop('checked'); return false; });
    $('#ColaboradoresIN').change(function () { document.getElementById('TxtColaboradoresIN').value = $(this).prop('checked'); return false; });
    $('#ColaboradoresAL').change(function () { document.getElementById('TxtColaboradoresAL').value = $(this).prop('checked'); return false; });
    $('#ColaboradoresEX').change(function () { document.getElementById('TxtColaboradoresEX').value = $(this).prop('checked'); return false; });
    $('#CentroDeCustosLE').change(function () { document.getElementById('TxtCentroDeCustosLE').value = $(this).prop('checked'); return false; });
    $('#CentroDeCustosIN').change(function () { document.getElementById('TxtCentroDeCustosIN').value = $(this).prop('checked'); return false; });
    $('#CentroDeCustosAL').change(function () { document.getElementById('TxtCentroDeCustosAL').value = $(this).prop('checked'); return false; });
    $('#CentroDeCustosEX').change(function () { document.getElementById('TxtCentroDeCustosEX').value = $(this).prop('checked'); return false; });
    $('#SenhasUsuarioLE').change(function () { document.getElementById('TxtSenhasUsuarioLE').value = $(this).prop('checked'); return false; });
    $('#SenhasUsuarioIN').change(function () { document.getElementById('TxtSenhasUsuarioIN').value = $(this).prop('checked'); return false; });
    $('#SenhasUsuarioAL').change(function () { document.getElementById('TxtSenhasUsuarioAL').value = $(this).prop('checked'); return false; });
    $('#SenhasUsuarioEX').change(function () { document.getElementById('TxtSenhasUsuarioEX').value = $(this).prop('checked'); return false; });
    $('#AvisosLE').change(function () { document.getElementById('TxtAvisosLE').value = $(this).prop('checked'); return false; });
    $('#AvisosIN').change(function () { document.getElementById('TxtAvisosIN').value = $(this).prop('checked'); return false; });
    $('#AvisosAL').change(function () { document.getElementById('TxtAvisosAL').value = $(this).prop('checked'); return false; });
    $('#AvisosEX').change(function () { document.getElementById('TxtAvisosEX').value = $(this).prop('checked'); return false; });
    $('#GradeDeHorariosLE').change(function () { document.getElementById('TxtGradeDeHorariosLE').value = $(this).prop('checked'); return false; });
    $('#GradeDeHorariosIN').change(function () { document.getElementById('TxtGradeDeHorariosIN').value = $(this).prop('checked'); return false; });
    $('#GradeDeHorariosAL').change(function () { document.getElementById('TxtGradeDeHorariosAL').value = $(this).prop('checked'); return false; });
    $('#GradeDeHorariosEX').change(function () { document.getElementById('TxtGradeDeHorariosEX').value = $(this).prop('checked'); return false; });
    $('#DadosLE').change(function () { document.getElementById('TxtDadosLE').value = $(this).prop('checked'); return false; });
    $('#DadosIN').change(function () { document.getElementById('TxtDadosIN').value = $(this).prop('checked'); return false; });
    $('#DadosAL').change(function () { document.getElementById('TxtDadosAL').value = $(this).prop('checked'); return false; });
    $('#DadosEX').change(function () { document.getElementById('TxtDadosEX').value = $(this).prop('checked'); return false; });
    $('#AplicativosLE').change(function () { document.getElementById('TxtAplicativosLE').value = $(this).prop('checked'); return false; });
    $('#AplicativosIN').change(function () { document.getElementById('TxtAplicativosIN').value = $(this).prop('checked'); return false; });
    $('#AplicativosAL').change(function () { document.getElementById('TxtAplicativosAL').value = $(this).prop('checked'); return false; });
    $('#AplicativosEX').change(function () { document.getElementById('TxtAplicativosEX').value = $(this).prop('checked'); return false; });
    $('#AjudaLE').change(function () { document.getElementById('TxtAjudaLE').value = $(this).prop('checked'); return false; });
    $('#AjudaIN').change(function () { document.getElementById('TxtAjudaIN').value = $(this).prop('checked'); return false; });
    $('#AjudaAL').change(function () { document.getElementById('TxtAjudaAL').value = $(this).prop('checked'); return false; });
    $('#AjudaEX').change(function () { document.getElementById('TxtAjudaEX').value = $(this).prop('checked'); return false; });
    $('#DownloadsLE').change(function () { document.getElementById('TxtDownloadsLE').value = $(this).prop('checked'); return false; });
    $('#DownloadsIN').change(function () { document.getElementById('TxtDownloadsIN').value = $(this).prop('checked'); return false; });
    $('#DownloadsAL').change(function () { document.getElementById('TxtDownloadsAL').value = $(this).prop('checked'); return false; });
    $('#DownloadsEX').change(function () { document.getElementById('TxtDownloadsEX').value = $(this).prop('checked'); return false; });

 
}


function checastatus() {
    if ($('#AlunosLE').is(":checked")) {
        document.getElementById('AlunosHLeitura').value = 'true';
    } else {
        document.getElementById('AlunosHLeitura').value = 'false';
        console.log($(this).prop('checked') + " Teste");
    }
}

function Alunos() {
    $('#AlunosLE').bootstrapToggle('on');
    $('#AlunosIN').bootstrapToggle('on');
    $('#AlunosAL').bootstrapToggle('on');
    $('#AlunosEX').bootstrapToggle('on');
    return false;
}

function Responsaveis() {
    $('#ResponsaveisLE').bootstrapToggle('on')
    $('#ResponsaveisIN').bootstrapToggle('on')
    $('#ResponsaveisAL').bootstrapToggle('on')
    $('#ResponsaveisEX').bootstrapToggle('on')
    return false;
}

function Cantina() {
    $('#CantinaLE').bootstrapToggle('on')
    $('#CantinaIN').bootstrapToggle('on')
    $('#CantinaAL').bootstrapToggle('on')
    $('#CantinaEX').bootstrapToggle('on')
    return false;
}

function Frequencia() {
    $('#FrequenciaLE').bootstrapToggle('on')
    $('#FrequenciaIN').bootstrapToggle('on')
    $('#FrequenciaAL').bootstrapToggle('on')
    $('#FrequenciaEX').bootstrapToggle('on')
    return false;
}
function Colaboradores() {
    $('#ColaboradoresLE').bootstrapToggle('on')
    $('#ColaboradoresIN').bootstrapToggle('on')
    $('#ColaboradoresAL').bootstrapToggle('on')
    $('#ColaboradoresEX').bootstrapToggle('on')
    return false;
}
function CentroDeCustos() {
    $('#CentroDeCustosLE').bootstrapToggle('on')
    $('#CentroDeCustosIN').bootstrapToggle('on')
    $('#CentroDeCustosAL').bootstrapToggle('on')
    $('#CentroDeCustosEX').bootstrapToggle('on')
    return false;
}
function SenhasUsuario() {
    $('#SenhasUsuarioLE').bootstrapToggle('on')
    $('#SenhasUsuarioIN').bootstrapToggle('on')
    $('#SenhasUsuarioAL').bootstrapToggle('on')
    $('#SenhasUsuarioEX').bootstrapToggle('on')
    return false;
}
function Avisos() {
    $('#AvisosLE').bootstrapToggle('on')
    $('#AvisosIN').bootstrapToggle('on')
    $('#AvisosAL').bootstrapToggle('on')
    $('#AvisosEX').bootstrapToggle('on')
    return false;
}
function GradeDeHorarios() {
    $('#GradeDeHorariosLE').bootstrapToggle('on')
    $('#GradeDeHorariosIN').bootstrapToggle('on')
    $('#GradeDeHorariosAL').bootstrapToggle('on')
    $('#GradeDeHorariosEX').bootstrapToggle('on')
    return false;
}
function Dados() {
    $('#DadosLE').bootstrapToggle('on')
    $('#DadosIN').bootstrapToggle('on')
    $('#DadosAL').bootstrapToggle('on')
    $('#DadosEX').bootstrapToggle('on')
    return false;
}
function Aplicativos() {
    $('#AplicativosLE').bootstrapToggle('on')
    $('#AplicativosIN').bootstrapToggle('on')
    $('#AplicativosAL').bootstrapToggle('on')
    $('#AplicativosEX').bootstrapToggle('on')
    return false;
}
function Ajuda() {
    $('#AjudaLE').bootstrapToggle('on')
    $('#AjudaIN').bootstrapToggle('on')
    $('#AjudaAL').bootstrapToggle('on')
    $('#AjudaEX').bootstrapToggle('on')
    return false;
}

function Downloads() {
    $('#DownloadsLE').bootstrapToggle('on')
    $('#DownloadsIN').bootstrapToggle('on')
    $('#DownloadsAL').bootstrapToggle('on')
    $('#DownloadsEX').bootstrapToggle('on')
    return false;
}




/* CONTADOR      SITE http://jsfiddle.net/47a7A/6206/
$(document).ready(function () {
    var text_max = 99;
    $('#textarea_feedback').html(text_max + ' characters remaining');

    $('#textarea').keyup(function () {
        var text_length = $('#textarea').val().length;
        var text_remaining = text_max - text_length;

        $('#textarea_feedback').html(text_remaining + ' characters remaining');
    });
});

*/


      











