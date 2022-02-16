function addGood(id) {

    $.ajax({
        type: 'GET',
        url: '../index.php',
        data: {
            id: id,
            c: 'cart',
            action: 'addGood'
        },
        success: function (data) {
            console.log(data)
            if (data) {
                document.getElementById('circle').style.display = 'block';
                alert('Товар добавлен в корзину');
            } else {
                alert('Для покупки товара необходимо зарегистрироваться или войти')
            }
        }
    });
}

function delGood(id) {

    $.ajax({
        type: 'GET',
        url: '../index.php',
        data: {
            id: id,
            c: 'cart',
            action: 'delGood'
        },
        success: function () {
            // $('#cart').load(`view/cart.php #cart > *`);
            // $(`#sum`).load(`view/cart.php #sum > *`);
            location.reload();
        }
    })
}

function clearCart() {
    $.ajax({
        type: 'GET',
        url: '../index.php',
        data: {
            c: 'cart',
            action: 'clearCart'
        },
        success: function () {
            // $('#cart').load(`cart.php #cart > *`);
            // $(`#sum`).load(`cart.php #sum > *`);
            location.reload();
        }
    })

}

function moreQuantity(id) {
    $.ajax({
        type: 'GET',
        url: '../index.php',
        data: {
            id: id,
            c: 'cart',
            action: 'moreQuantity',
            quantity: document.getElementById('quantity').value
        },
        success: function () {
            // $(`#quantity_${id}`).load(`view/cart.php #quantity_${id} > *`);
            // $(`#sum`).load(`view/cart.php #sum > *`);
            location.reload();
        },
    })
}

function lessQuantity(id) {
    $.ajax({
        type: 'GET',
        url: '../index.php',
        data: {
            id: id,
            c: 'cart',
            action: 'lessQuantity',
            quantity: document.getElementById('quantity').value
        },
        success: function () {
            // $(`#quantity_${id}`).load(`index.php #quantity_${id} > *`);
            // $(`#sum`).load(`index.php #sum > *`);
            location.reload();
        }
    })
}

let i = 9;
let j = 19;

function getMore() {
    $.ajax({
        type: 'GET',
        url: './index.php',
        data: {
            c: 'catalog',
            action: 'getMore',
            start: i,
            end: j
        },
        success: function (data) {
            if (data) {
                $('#catalog').append(data);
                i += 9
                j += 9
            } else {
                $('#catalog').append(`<div id="end" class='catalog_end'><h3 class='catalog_end-text'>Товаров больше нет...</h3></div>`);
                setTimeout($('#end').hide(), 1000);
            }
        }
    })
}

function order() {
    $.ajax({
        type: 'GET',
        url: '../index.php',
        data: {
            c: 'cart',
            action: 'order'
        },
        success: function (data) {
            if (data === false) {
                alert('Корзина пуста')
            } else {
                // $('#cart').load(`cart.php #cart > *`);
                // $(`#sum`).load(`cart.php #sum > *`);
                location.reload();
                $('#order').append("<h1>Заказ оформлен!</h1>")
            }
        }
    })
}


