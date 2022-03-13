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
                Toastify({
                    text: "Товар добавлен в корзину",
                    duration: 3000,
                    close: true,
                    style: {
                        marginTop: "65px",
                        background: "#F16D7F"
                    }
                }).showToast();
            } else {
                Toastify({
                    text: "Для покупки товара необходимо зарегистрироваться или войти",
                    duration: 3000,
                    close: true,
                    style: {
                        marginTop: "65px",
                        background: "#F16D7F"
                    }
                }).showToast();
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
            $('#cart').load(`http://gbphp2/index.php?c=cart #cart > *`);
            $(`#sum`).load(`http://gbphp2/index.php?c=cart #sum > *`);
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
            $('#cart').load(`http://gbphp2/index.php?c=cart #cart > *`);
            $(`#sum`).load(`http://gbphp2/index.php?c=cart #sum > *`);
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
            quantity: document.getElementById(`quantity_value_${id}`).value
        },
        success: function () {
            $(`#quantity_${id}`).load(`http://gbphp2/index.php?c=cart #quantity_${id} > *`);
            $(`#sum`).load(`http://gbphp2/index.php?c=cart #sum > *`);
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
            quantity: document.getElementById(`quantity_value_${id}`).value
        },
        success: function () {
            $(`#quantity_${id}`).load(`http://gbphp2/index.php?c=cart #quantity_${id} > *`);
            $(`#sum`).load(`http://gbphp2/index.php?c=cart #sum > *`);
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
                Toastify({
                    text: "Товаров больше нет",
                    duration: 3000,
                    close: true,
                    style: {
                        background: "#F16D7F"
                    }
                }).showToast();
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
                $('#cart').load(`http://gbphp2/index.php?c=cart #cart > *`);
                $(`#sum`).load(`http://gbphp2/index.php?c=cart #sum > *`);
                $('#order').append("<h1>Заказ оформлен!</h1>")
            }
        }
    })
}


