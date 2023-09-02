function ExecutaLogout() {
    var resp = confirm('Deseja sair do sistema?');
    if (resp == true) {
        location.href = "../adm_logout.php";
    } else {
        return null;
    }
}

$(function() {
    $('[data-toggle="tooltip"]').tooltip()
})


function confirma() {
    document.getElementById("auto").addEventListener("submit", function(event) {
        event.preventDefault();
        if (window.confirm("Tem certeza de que deseja alterar seus dados? Será necessário refazer seu login")) {

            this.submit();
        } else {

        }
    });
}
