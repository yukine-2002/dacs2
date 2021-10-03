var menu = document.querySelector(".menu-bar");
var navbar = document.querySelector(".navbar");
menu.addEventListener("click", () => {
    console.log(1);
    navbar.classList.toggle("activeMenuBar");
});

countCart();
function countCart() {
    $.ajax({
        url: "../showCart",
        type: "get",
    }).done(function (data) {
        $(".countCart").html(data);
    });
}

$('.cartCt').on('click', function (event) {
    event.preventDefault();
    var value = $(this).data("value");
    console.log(value);
    $.ajax({
        url: "actionCart",
        type: "get",
        data: {
            action: "add",
            id: value,
        },
    })
        .done(function (datass) {
            countCart();
            console.log(datass);
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            console.log(textStatus + ": " + errorThrown);
        });
});
