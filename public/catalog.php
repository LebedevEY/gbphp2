<?php
require "../controllers/Goods.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/ajax.js"></script>
    <title>Каталог</title>
</head>

<body>
<div class="wrapper">
    <div class="content">
        <? include "../templates/header.php"; ?>
        <div class="page__name center">
            <h1 class="page__heading">NEW ARRIVALS</h1>
            <ul class="breadcrumb">
                <li><a href="index.php">Home /</a></li>
                <li><a href="#">Men /</a></li>
                <li>
                    <p class="active">New arrivals</p>
                </li>
            </ul>
        </div>

        <section class="products center">
            <div class="details__filter">
                <div class="filter">
                    <details class="filter__main">
                        <summary class="filter__name">FILTER</summary>
                        <details class="filter__sort">
                            <summary class="filter__category"><span class="filter__category__name">CATEGORY</span>
                            </summary>
                            <ul class="filter__category__list">
                                <li><a href="#" class="filter__category__link">Accessories</a></li>
                                <li><a href="#" class="filter__category__link">Bags</a></li>
                                <li><a href="#" class="filter__category__link">Denim</a></li>
                                <li><a href="#" class="filter__category__link">Hoodies & Sweatshirts</a></li>
                                <li><a href="#" class="filter__category__link">Jackets & Coats</a></li>
                                <li><a href="#" class="filter__category__link">Polos</a></li>
                                <li><a href="#" class="filter__category__link">Shirts</a></li>
                                <li><a href="#" class="filter__category__link">Shoes</a></li>
                                <li><a href="#" class="filter__category__link">Sweaters & Knits</a></li>
                                <li><a href="#" class="filter__category__link">T-Shirts</a></li>
                                <li><a href="#" class="filter__category__link">Tanks</a></li>
                            </ul>
                        </details>
                        <details class="filter__sort">
                            <summary class="filter__category"><span class="filter__category__name">BRAND</span>
                            </summary>
                            <ul class="filter__category__list">
                                <li><a href="#" class="filter__category__link">Lorem, ipsum dolor.</a></li>
                                <li><a href="#" class="filter__category__link">Lorem, ipsum dolor.</a></li>
                                <li><a href="#" class="filter__category__link">Lorem, ipsum dolor.</a></li>
                                <li><a href="#" class="filter__category__link">Lorem, ipsum dolor.</a></li>
                                <li><a href="#" class="filter__category__link">Lorem, ipsum dolor.</a></li>
                            </ul>
                        </details>
                        <details class="filter__sort">
                            <summary class="filter__category"><span class="filter__category__name">DESIGNER</span>
                            </summary>
                            <ul class="filter__category__list">
                                <li><a href="#" class="filter__category__link">Lorem, ipsum dolor.</a></li>
                                <li><a href="#" class="filter__category__link">Lorem, ipsum dolor.</a></li>
                                <li><a href="#" class="filter__category__link">Lorem, ipsum dolor.</a></li>
                                <li><a href="#" class="filter__category__link">Lorem, ipsum dolor.</a></li>
                                <li><a href="#" class="filter__category__link">Lorem, ipsum dolor.</a></li>
                            </ul>
                        </details>
                    </details>
                </div>
                <div class="filter filter_mobile">
                    <details class="filter__main">
                        <summary class="filter__name">
                            <svg width="38" height="25" viewBox="0 0 38 25" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M2.08333 25H10.4167C11.5625 25 12.5 24.0625 12.5 22.9167C12.5 21.7708 11.5625 20.8333 10.4167 20.8333H2.08333C0.9375 20.8333 0 21.7708 0 22.9167C0 24.0625 0.9375 25 2.08333 25ZM0 2.08333C0 3.22917 0.9375 4.16667 2.08333 4.16667H35.4167C36.5625 4.16667 37.5 3.22917 37.5 2.08333C37.5 0.9375 36.5625 0 35.4167 0H2.08333C0.9375 0 0 0.9375 0 2.08333ZM2.08333 14.5833H22.9167C24.0625 14.5833 25 13.6458 25 12.5C25 11.3542 24.0625 10.4167 22.9167 10.4167H2.08333C0.9375 10.4167 0 11.3542 0 12.5C0 13.6458 0.9375 14.5833 2.08333 14.5833Z"
                                        fill="black"/>
                            </svg>
                        </summary>
                        <details class="filter__sort">
                            <summary class="filter__category"><span class="filter__category__name">CATEGORY</span>
                            </summary>
                            <ul class="filter__category__list">
                                <li><a href="#" class="filter__category__link">Accessories</a></li>
                                <li><a href="#" class="filter__category__link">Bags</a></li>
                                <li><a href="#" class="filter__category__link">Denim</a></li>
                                <li><a href="#" class="filter__category__link">Hoodies & Sweatshirts</a></li>
                                <li><a href="#" class="filter__category__link">Jackets & Coats</a></li>
                                <li><a href="#" class="filter__category__link">Polos</a></li>
                                <li><a href="#" class="filter__category__link">Shirts</a></li>
                                <li><a href="#" class="filter__category__link">Shoes</a></li>
                                <li><a href="#" class="filter__category__link">Sweaters & Knits</a></li>
                                <li><a href="#" class="filter__category__link">T-Shirts</a></li>
                                <li><a href="#" class="filter__category__link">Tanks</a></li>
                            </ul>
                        </details>
                        <details class="filter__sort">
                            <summary class="filter__category"><span class="filter__category__name">BRAND</span>
                            </summary>
                            <ul class="filter__category__list">
                                <li><a href="#" class="filter__category__link">Lorem, ipsum dolor.</a></li>
                                <li><a href="#" class="filter__category__link">Lorem, ipsum dolor.</a></li>
                                <li><a href="#" class="filter__category__link">Lorem, ipsum dolor.</a></li>
                                <li><a href="#" class="filter__category__link">Lorem, ipsum dolor.</a></li>
                                <li><a href="#" class="filter__category__link">Lorem, ipsum dolor.</a></li>
                            </ul>
                        </details>
                        <details class="filter__sort">
                            <summary class="filter__category"><span class="filter__category__name">DESIGNER</span>
                            </summary>
                            <ul class="filter__category__list">
                                <li><a href="#" class="filter__category__link">Lorem, ipsum dolor.</a></li>
                                <li><a href="#" class="filter__category__link">Lorem, ipsum dolor.</a></li>
                                <li><a href="#" class="filter__category__link">Lorem, ipsum dolor.</a></li>
                                <li><a href="#" class="filter__category__link">Lorem, ipsum dolor.</a></li>
                                <li><a href="#" class="filter__category__link">Lorem, ipsum dolor.</a></li>
                            </ul>
                        </details>
                    </details>
                </div>
                <div class="filter__right">
                    <details>
                        <summary>TRENDING NOW</summary>
                    </details>
                    <details>
                        <summary>SIZE</summary>
                        <form class="size__list" action="#">
                            <p><input type="checkbox" value="XS"> XS</p>
                            <p><input type="checkbox" value="S"> S</p>
                            <p><input type="checkbox" value="M"> M</p>
                            <p><input type="checkbox" value="L"> L</p>
                        </form>
                    </details>
                    <details>
                        <summary>PRICE</summary>
                    </details>
                </div>
            </div>
            <div id="catalog" class="products__box center">
                <?php
                foreach ($catalog as $item) { ?>
                    <div class="products__card">
                        <a href="product.php?id=<?= $item['id'] ?>"><img class="card__image"
                                                                         src="img/product_img/<?= $item['img'] ?>"
                                                                         alt="product image"></a>
                        <a href="product.php?id=<?= $item['id'] ?>">
                            <h3 class="card__h3"><?= $item['name'] ?></h3>
                        </a>
                        <p class="card__text"><?= $item['description'] ?></p>
                        <p class="card__price">$<?= $item['price'] ?>.00</p>
                        <button onclick="addGood(<?= $item['id'] ?>)" class="product__add">
                            <svg class="product__cart" width="27" height="25"
                                 viewBox="0 0 27 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M21.876 22.2662C21.921 22.2549 21.9423 22.2339 21.96 22.2129C21.9678 22.2037 21.9756 22.1946 21.9835 22.1855C22.02 22.1438 22.0233 22.0553 22.0224 22.0105C22.0092 21.9044 21.9185 21.8315 21.8412 21.8315C21.8375 21.8315 21.8336 21.8317 21.8312 21.8318C21.7531 21.8372 21.6653 21.9409 21.6719 22.0625C21.6813 22.1793 21.7675 22.2662 21.8392 22.2662H21.876ZM8.21954 22.2599C8.31873 22.2599 8.39935 22.1655 8.39935 22.0496C8.39935 21.9341 8.31873 21.8401 8.21954 21.8401C8.12042 21.8401 8.03973 21.9341 8.03973 22.0496C8.03973 22.1655 8.12042 22.2599 8.21954 22.2599ZM21.9995 24.2662C21.9517 24.2662 21.8878 24.2662 21.8392 24.2662C20.7017 24.2662 19.7567 23.3545 19.6765 22.198C19.5964 20.9929 20.4937 19.9183 21.6953 19.8364C21.7441 19.8331 21.7928 19.8315 21.8412 19.8315C22.9799 19.8315 23.9413 20.7324 24.019 21.8884C24.0505 22.4915 23.8741 23.0612 23.4898 23.5012C23.1055 23.9575 22.5764 24.2177 21.9995 24.2662ZM8.21954 24.2599C7.01532 24.2599 6.03973 23.2709 6.03973 22.0496C6.03973 20.8291 7.01532 19.8401 8.21954 19.8401C9.42371 19.8401 10.3994 20.8291 10.3994 22.0496C10.3994 23.2709 9.42371 24.2599 8.21954 24.2599ZM21.1984 17.3938H9.13306C8.70013 17.3938 8.31586 17.1005 8.20331 16.6775L4.27753 2.24768H1.52173C0.993408 2.24768 0.560547 1.80859 0.560547 1.27039C0.560547 0.733032 0.993408 0.292969 1.52173 0.292969H4.99933C5.43134 0.292969 5.81561 0.586304 5.9281 1.01025L9.85394 15.4391H20.5576L24.1144 7.13379H12.2578C11.7286 7.13379 11.2957 6.69373 11.2957 6.15649C11.2957 5.61914 11.7286 5.17908 12.2578 5.17908H25.5886C25.9091 5.17908 26.2141 5.34192 26.3896 5.61914C26.566 5.89539 26.5984 6.23743 26.4697 6.547L22.0795 16.807C21.9193 17.1653 21.5827 17.3938 21.1984 17.3938Z"
                                        fill="white"/>
                            </svg>
                            Add to Cart
                        </button>
                    </div>
                <?php } ?>
            </div>
            <button onclick="getMore(<?= count($catalog) + 9 ?>)" class="products__btn"><p class="products__btn__text">Get more</p></button>
        </section>
    </div>

    <?php include "../templates/footer.php"; ?>
</div>
</body>

</html>