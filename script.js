var menu = document.getElementById("menu");
var botao_menu = document.getElementById("botao_menu");
botao_menu.addEventListener("click", () => {
    menu.classList.toggle("mobile");
})
var card = document.querySelector(".card");
var card_body = document.querySelector(".card-body");
card_body.style.display = 'none';
card.addEventListener("click", function () {
    $(".card-body").fadeIn(3000);
    setTimeout('fechar_foto()', 10000);

});
function fechar_foto() {
    card_body.style.display = 'none';
}

