var loader_posicao = document.querySelector('.loader-posicao');
loader_posicao.style.display = "none";


function voltar() {
    setTimeout('ir()', 4000);
    $(".botoes").fadeOut(0);
    $(".loader-posicao").fadeIn(3000);

}
function ir() {
    window.location.href = "Inicio.php";
}