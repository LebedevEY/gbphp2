<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <script src="view/js/jquery.js"></script>
    <script src="view/js/ajax.js"></script>
    <title>Каталог</title>
</head>

<body>
<div class="wrapper">
    <div class="content">
        <? include "./templates/header.php"; ?>
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
                foreach ($catalog as $item) {
                    include "./templates/good_card.php";
                } ?>
            </div>
            <button onclick="getMore()" class="products__btn"><p class="products__btn__text">Get more</p></button>
        </section>
    </div>

    <?php include "./templates/footer.php"; ?>
</div>
</body>

</html>