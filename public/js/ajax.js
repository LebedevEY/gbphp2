function addGood(id) {

    $.ajax({
        type: 'POST',
        url: '../controllers/Cart.php',
        data: {
            id: id,
            action: 'add'
        },
        success: function () {
            document.getElementById('circle').style.display = 'block';
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
        }
    })

}

function moreQuantity(id) {
    $.ajax({
        type: 'POST',
        url: '../controllers/Cart.php',
        data: {
            id: id,
            action: 'count+'
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
            action: 'count-'
        },
        success: function () {
            $(`#quantity_${id}`).load(`cart.php #quantity_${id} > *`);
            $(`#sum`).load(`cart.php #sum > *`);
        }
    })
}

function getMore(i) {
    $.ajax({
        type: 'POST',
        url: '../controllers/Goods.php',
        data: {
            point: i
        },
        success: function () {
            $('#catalog').load('catalog.php #catalog > *');
        }
    })
}