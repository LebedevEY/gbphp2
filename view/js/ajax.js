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
        success: function (data) {
            console.log(data)
            // $('#cart').load(`view/cart.php #cart > *`);
            // $(`#sum`).load(`view/cart.php #sum > *`);
            location.reload();
        }
    })
}

function clearCart() {
    $.ajax({
        type: 'POST',
        url: '../controllers/Cart.php',
        data: {
            action: 'clear'
        },
        success: function () {
            $('#cart').load(`cart.php #cart > *`);
            $(`#sum`).load(`cart.php #sum > *`);
        }
    })

}

function moreQuantity(id) {
    $.ajax({
        type: 'POST',
        url: '../controllers/Cart.php',
        data: {
            id: id,
            action: 'count+',
            quantity: document.getElementById('quantity').value
        },
        success: function () {
            $(`#quantity_${id}`).load(`cart.php #quantity_${id} > *`);
            $(`#sum`).load(`cart.php #sum > *`);

        },
    })
}

function lessQuantity(id) {
    $.ajax({
        type: 'POST',
        url: '../controllers/Cart.php',
        data: {
            id: id,
            action: 'count-',
            quantity: document.getElementById('quantity').value
        },
        success: function () {
            $(`#quantity_${id}`).load(`cart.php #quantity_${id} > *`);
            $(`#sum`).load(`cart.php #sum > *`);
        }
    })
}

let i = 9;
let j = 19;

function getMore() {
    $.ajax({
        type: 'POST',
        url: './controllers/CatalogC.php',
        data: {
            action: 'get',
            start_point: i,
            end_point: j
        },
        success: function (data) {
            $('#catalog').append(data);
            i += 9
            j += 9
            console.log(data)
        }
    })
}

function order() {
    $.ajax({
        type: 'POST',
        url: '../controllers/Cart.php',
        data: {
            action: 'order'
        },
        success: function (data) {
            if (data == false) {
                alert('Корзина пуста')
            } else {
                $('#cart').load(`cart.php #cart > *`);
                $(`#sum`).load(`cart.php #sum > *`);
                $('#order').append("<h1>Заказ оформлен!</h1>")
            }
        }
    })
}
