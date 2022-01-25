<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/ajax.js"></script>
    <title>Корзина</title>
</head>


<body>
<?php
require_once "../controllers/Cart.php";
?>
<div class="wrapper">
    <div class="content">

        <?php include "../templates/header.php"; ?>

        <div class="page__name center">
            <h1 class="page__heading">SHOPPING CART</h1>
            <ul class="breadcrumb">
                <li><a href="index.php">Home /</a></li>
                <li><a href="catalog.php">catalog /</a></li>
                <li>
                    <p class="active">shopping cart</p>
                </li>
            </ul>
        </div>


        <div class="cart center">
            <div id="cart" class="cart__left">
                <?php
                foreach ($goods as $item) { ?>
                    <div class="cart__product">
                        <img class="cart__product_img" src="img/product_img/<?= $item['img'] ?>" alt="product photo">
                        <div class="cart__product__content">
                            <a href="product.php?id=<?= $item['good_id'] ?>"
                               class="cart__product__content__link"><?= $item['name'] ?></a>
                            <button class="cart__product_close" onclick="delGood(<?= $item['id'] ?>)">
                                <svg width="18" height="18" viewBox="0 0 18 18"
                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M11.2453 9L17.5302 2.71516C17.8285 2.41741 17.9962 2.01336 17.9966 1.59191C17.997 1.17045 17.8299 0.76611 17.5322 0.467833C17.2344 0.169555 16.8304 0.00177586 16.4089 0.00140366C15.9875 0.00103146 15.5831 0.168097 15.2848 0.465848L9 6.75069L2.71516 0.465848C2.41688 0.167571 2.01233 0 1.5905 0C1.16868 0 0.764125 0.167571 0.465848 0.465848C0.167571 0.764125 0 1.16868 0 1.5905C0 2.01233 0.167571 2.41688 0.465848 2.71516L6.75069 9L0.465848 15.2848C0.167571 15.5831 0 15.9877 0 16.4095C0 16.8313 0.167571 17.2359 0.465848 17.5342C0.764125 17.8324 1.16868 18 1.5905 18C2.01233 18 2.41688 17.8324 2.71516 17.5342L9 11.2493L15.2848 17.5342C15.5831 17.8324 15.9877 18 16.4095 18C16.8313 18 17.2359 17.8324 17.5342 17.5342C17.8324 17.2359 18 16.8313 18 16.4095C18 15.9877 17.8324 15.5831 17.5342 15.2848L11.2453 9Z"
                                            fill="#575757"/>
                                </svg>
                            </button>
                            <ul class="cart__product__content__list">
                                <li class="cart__product__content__list__item">Price: <span
                                            style="color: #F16D7F;">$<?= $item['price'] ?></span>
                                </li>
                                <li class="cart__product__content__list__item">Color: <span
                                            style="color: #656565;">Red</span>
                                </li>
                                <li class="cart__product__content__list__item">Size: <span
                                            style="color: #656565;">Xl</span>
                                </li>
                                <li class="cart__product__content__list__item">Quantity:
                                    <div class="quantity__div" id="quantity_<?= $item['good_id'] ?>">
                                        <input class="quantity" type="text" value="<?= $item['count'] ?>">
                                        <button class="quantity__button"
                                                onclick="moreQuantity(<?= $item['good_id'] ?>)">+
                                        </button>
                                        <button class="quantity__button"
                                                onclick="lessQuantity(<?= $item['good_id'] ?>)">-
                                        </button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php } ?>

                <div class="cart__buttons">
                    <button class="cart__button" onclick="clearCart()">Clear shopping cart</button>
                    <form action="catalog.php">
                        <button class="cart__button">Continue shopping</button>
                    </form>
                </div>
            </div>
            <div class="cart__right">
                <form class="cart__right__form" action="#">
                    <h2 class="cart__right__form__heading">SHIPPING ADDRESS</h2>
                    <input class="cart__right__form__input" type="text" placeholder="Bangladesh" required>
                    <input class="cart__right__form__input" type="text" placeholder="State" required>
                    <input class="cart__right__form__input" type="text" placeholder="Postcode / Zip" required>
                    <button class="cart__right__form__button">GET A QUOTE</button>
                </form>
                <div id="sum" class="cart__right__total">
                    <h4 class="cart__right__total__h4">SUB TOTAL <span
                                style="margin-left: 20px;">$ <?= $sum[0] ?></span></h4>
                    <h3 class="cart__right__total__h3">GRAND TOTAL <span
                                style="margin-left: 20px; color: #F16D7F;">$ <?= $sum[0] ?></span></h3>
                    <hr class="cart__right__total__hr">
                    <button class="cart__right__total__button">PROCEED TO CHECKOUT</button>
                </div>
            </div>
        </div>

    </div>

    <?php include "../templates/footer.php"; ?>
</div>
</body>

</html>