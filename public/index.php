<?php
require_once "../controllers/Goods.php";
?>

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
    <title>Главная</title>
</head>

<body>
<div class="wrapper">
    <div class="content">

        <?php include "../templates/header.php"; ?>

        <div class="promo">
            <div class="promo__left">
                <img class="promo__image" src="img/promo_img.png" alt="promo img">
            </div>
            <div class="promo__right">
                <div class="promo__content">
                    <h1 class="promo__h1">the brand</h1>
                    <h3 class="promo__heading">of luxurious <span class="promo__text">fashion</span></h3>
                </div>
            </div>
        </div>

        <div class="sale center">
            <div class="sale__box">
                <div class="sale__item"><img class="sale__image" src="img/sale_item_1.jpg" alt="sale image">
                    <div class="sale__content">
                        <p class="sale__text">30% off</p>
                        <h3 class="sale__h3">for women</h3>

                    </div>
                </div>
                <div class="sale__item"><img class="sale__image" src="img/sale_item_2.jpg" alt="sale image">
                    <div class="sale__content">
                        <p class="sale__text">hot deal</p>
                        <h3 class="sale__h3">for men</h3>
                    </div>
                </div>
                <div class="sale__item"><img class="sale__image" src="img/sale_item_3.jpg" alt="sale image">
                    <div class="sale__content">
                        <p class="sale__text">new arrivals</p>
                        <h3 class="sale__h3">for kids</h3>
                    </div>
                </div>
            </div>
            <div class="sale__item sale__item__box"><img class="sale__image" src="img/sale_item_4.jpg"
                                                         alt="sale image">
                <div class="sale__content">
                    <p class="sale__text">luxurious & trendy</p>
                    <h3 class="sale__h3">accessories</h3>
                </div>
            </div>
        </div>

        <section class="products center">

            <h2 class="products__h2 tac">Featured items</h2>
            <p class="products__text tac">Shop for items based on what we featured in this week</p>

            <div id="test"  class="products__box center">

                <?php
                foreach ($index_catalog as $item) {
                    include "../templates/good_card.php";
                } ?>

            </div>

            <a href="catalog.php" class="products__btn">
                <p class="products__btn__text">Browse All Product</p>
            </a>

        </section>
    </div>

    <?php include "../templates/footer.php"; ?>
</div>
</body>

</html>