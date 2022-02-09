function addGood(id) {

    $.ajax({
        type: 'POST',
        url: '../controllers/Cart.php',
        data: {
            id: id,
            action: 'add'
        },
        success: function (data) {
            document.getElementById('circle').style.display = 'block';
            console.log(data)
            alert('Товар добавлен в корзину');
        }
    });
}

function delGood(id) {

    $.ajax({
        type: 'POST',
        url: '../controllers/Cart.php',
        data: {
            id: id,
            action: 'delete'
        },
        success: function () {
            $('#cart').load(`cart.php #cart > *`);
            $(`#sum`).load(`cart.php #sum > *`);
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
        url: '../controllers/Catalog.php',
        data: {
            start_point: i,
            end_point: j
        },
        success: function (data) {
            $('#catalog').append(data);
            i += 9
            j += 9
        }
    })
}

function exit() {
    $.ajax({
        type: 'POST',
        url: '../controllers/Profile.php',
        data: {
            action: 'exit'
        },
        success: function () {
            window.location='login.php';
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
            $('#cart').load(`cart.php #cart > *`);
            $(`#sum`).load(`cart.php #sum > *`);
            console.log(data)
            $('#order').append("<h1>Заказ оформлен!</h1>")
        }
    })
}
