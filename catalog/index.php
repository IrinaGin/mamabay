<?include('../header.php');?>
<div class="catalog">
    <div class="wrap">
        <div class="breadcrumbs">
            <a href="/" class="parent">Главная</a>
            <a href="/catalog/">Детям </a>
        </div>
        <h1 class="title--inline">Детям</h1><span class="catalog-count">123 товара</span>
        <div class="banner-sale">
            <div class="wrap">
                <div class="banner-sale__info">Скидки до 25%</div>
            </div>
        </div>
        <div class="inner__left">
            <ul class="left-menu">
                <li><a href="/catalog/" class="parent left-menu__item">Подгузники</a><span class="count">123</span>
                    <ul class="left-menu__sub">
                        <li><a href="/catalog/" class="left-menu__item-sub">Средства для купания</a><span class="count-sub">123</span></li>
                        <li><a href="/catalog/" class="left-menu__item-sub">Салфетки</a><span class="count-sub">123</span></li>
                        <li><a href="/catalog/" class="left-menu__item-sub">Ватные диски и палочки</a><span class="count-sub">123</span></li>
                    </ul>
                </li>
                <li><a href="#" class="parent left-menu__item">Питание</a><span class="count">123</span>
                    <ul class="left-menu__sub">
                        <li><a href="/catalog/" class="left-menu__item-sub">Средства для купания</a><span class="count-sub">123</span></li>
                        <li><a href="/catalog/" class="left-menu__item-sub">Салфетки</a><span class="count-sub">123</span></li>
                        <li><a href="/catalog/" class="left-menu__item-sub">Ватные диски и палочки</a><span class="count-sub">123</span></li>
                    </ul>
                </li>
                <li><a href="/catalog/" class="left-menu__item">Медицина</a><span class="count">123</span></li>
                <li><a href="/catalog/" class="left-menu__item">Текстиль</a><span class="count">123</span></li>
            </ul>
            <form class="catalog-filter__form">
                <ul class="catalog-filter">
                    <li class="catalog-filter__item"><a href="#">Цена</a>
                        <div class="catalog-filter__sub-item">
                            <div class="sub-item__text">Потяните за ползунки</div>
                            <div class="sub-input-holder">
                                <input type="text" name="ot" placeholder="От" class="sub-input min">
                                <input type="text" name="ot" placeholder="До" class="sub-input max">
                            </div>
                            <div class="range">
                                <div class="slider"></div>
                                <span class="z-min">345</span>
                                <span class="z-max">5600</span>
                            </div>
                        </div>
                    </li>
                    <li class="catalog-filter__item"><a href="#">Бренд</a>
                        <div class="catalog-filter__sub-item">
                            <label class="agree-holder" for="Merries">
                                <span class="agree-box"></span>
                                <input type="checkbox" name="Merries" id="Merries" class="agree">
                                Merries
                            </label>
                            <label class="agree-holder" for="Friso">
                                <span class="agree-box"></span>
                                <input type="checkbox" name="Friso" id="Friso" class="agree">
                                Friso
                            </label>
                            <label class="agree-holder" for="Duracell">
                                <span class="agree-box"></span>
                                <input type="checkbox" name="Duracell" id="Duracell" class="agree">
                                Duracell
                            </label>
                            <label class="agree-holder" for="Burti">
                                <span class="agree-box"></span>
                                <input type="checkbox" name="Burti" id="Burti" class="agree">
                                Burti
                            </label>
                        </div>
                    </li>
                </ul>
                <div class="catalog-filter__bottom">
                    <div class="sub-item__text">Подобрано 209 товаров</div>
                    <button type="submit" class="btn catalog-filter__btn">Показать</button>
                    <a href="#" class="catalog-filter__clear">Сбросить фильтр</a>
                </div>
            </form>
        </div>
        <div class="inner__right">
            <div class="catalog__sort">
                <a href="#" class="catalog__sort__item">Цена</a>
                <a href="#" class="catalog__sort__item mobile sort-filter">Фильтр</a>
                <a href="#" class="catalog__sort__item sort-popular">По популярности</a>
                <a href="#" class="catalog__sort__item sort-new">По новизне</a>
            </div>
            <div class="catalog__filter-chosen">
                <div class="chosen__items">
                    <a href="#" class="chosen__item">100-2000</a>
                    <a href="#" class="chosen__item">Ушастый нянь</a>
                    <a href="#" class="chosen__item">Фрутоняня</a>
                </div>
                <a href="#" class="filter-clear">Сбросить фильтры</a>
            </div>
            <div class="catalog__items">
                <a href="/catalog/product-detail.php" class="product__item">
<!--                    <span class="label-new">Новинка</span>-->
<!--                    <span class="label-hit">ХИТ</span>-->
                        <span class="label-sale">15%</span>
                    <span class="product__item-img" style="background: url(/images/product-1.png) no-repeat center; background-size: auto 100%;"></span>
                    <span class="product__item-name">Губка для купания BabyLine минеральный комплекс с 0 мес 1 шт</span>
                    <span class="product__availability">В наличии</span>
                    <span class="product__prices">
                        <span class="old-price">251 руб.</span>
<!--                        <span class="price">251 руб.</span>-->
                        <span class="new-price">251 руб.</span>
                    </span>
                    <span class="buy-btn"></span>
                    <span class="favorite-btn"></span>
                </a>
                <a href="/catalog/product-detail.php" class="product__item">
                    <span class="label-new">Новинка</span>
                    <!--                    <span class="label-hit">ХИТ</span>-->
                    <!--                    <span class="label-sale">15%</span>-->
                    <span class="product__item-img" style="background: url(/images/product-2.png) no-repeat center; background-size: auto 100%;"></span>
                    <span class="product__item-name">Стиральный порошок Ушастый нянь для детского белья с 0 мес 4,5 кг</span>
                    <span class="product__availability">В наличии</span>
                    <span class="product__prices">
<!--                        <span class="old-price">251 руб.</span>-->
                        <span class="price">251 руб.</span>
                        <!--                        <span class="new-price">251 руб.</span>-->
                    </span>
                    <span class="buy-btn"></span>
                    <span class="favorite-btn"></span>
                </a>
                <a href="/catalog/product-detail.php" class="product__item">
<!--                    <span class="label-new">Новинка</span>-->
                    <!--                                        <span class="label-hit">ХИТ</span>-->
                    <!--                    <span class="label-sale">15%</span>-->
                    <span class="product__item-img" style="background: url(/images/product-3.png) no-repeat center; background-size: auto 100%;"></span>
                    <span class="product__item-name">Подгузники на липучках Moony M (6-11 кг) 62 шт</span>
                    <span class="product__availability">В наличии</span>
                    <span class="product__prices">
<!--                        <span class="old-price">251 руб.</span>-->
                            <span class="price">251 руб.</span>
                        <!--                        <span class="new-price">251 руб.</span>-->
                    </span>
                    <span class="buy-btn"></span>
                    <span class="favorite-btn"></span>
                </a>
                <a href="/catalog/product-detail.php" class="product__item">
<!--                    <span class="label-new">Новинка</span>-->
                                                            <span class="label-hit">ХИТ</span>
                    <!--                    <span class="label-sale">15%</span>-->
                    <span class="product__item-img" style="background: url(/images/product-4.png) no-repeat center; background-size: auto 100%;"></span>
                    <span class="product__item-name">Молоко ФрутоНЯНЯ молоко с печеньем с 12 мес 200 мл</span>
                    <span class="product__availability">В наличии</span>
                    <span class="product__prices">
<!--                        <span class="old-price">251 руб.</span>-->
                                                <span class="price">35 руб.</span>
                        <!--                        <span class="new-price">251 руб.</span>-->
                    </span>
                    <span class="buy-btn"></span>
                    <span class="favorite-btn"></span>
                </a>
                <a href="/catalog/product-detail.php" class="product__item">
                    <!--                    <span class="label-new">Новинка</span>-->
                    <!--                    <span class="label-hit">ХИТ</span>-->
                    <span class="label-sale">15%</span>
                    <span class="product__item-img" style="background: url(/images/product-1.png) no-repeat center; background-size: auto 100%;"></span>
                    <span class="product__item-name">Губка для купания BabyLine минеральный комплекс с 0 мес 1 шт</span>
                    <span class="product__availability">В наличии</span>
                    <span class="product__prices">
                        <span class="old-price">251 руб.</span>
                        <!--                        <span class="price">251 руб.</span>-->
                        <span class="new-price">251 руб.</span>
                    </span>
                    <span class="buy-btn"></span>
                    <span class="favorite-btn"></span>
                </a>
                <a href="/catalog/product-detail.php" class="product__item">
                    <span class="label-new">Новинка</span>
                    <!--                    <span class="label-hit">ХИТ</span>-->
                    <!--                    <span class="label-sale">15%</span>-->
                    <span class="product__item-img" style="background: url(/images/product-2.png) no-repeat center; background-size: auto 100%;"></span>
                    <span class="product__item-name">Стиральный порошок Ушастый нянь для детского белья с 0 мес 4,5 кг</span>
                    <span class="product__availability">В наличии</span>
                    <span class="product__prices">
<!--                        <span class="old-price">251 руб.</span>-->
                        <span class="price">251 руб.</span>
                        <!--                        <span class="new-price">251 руб.</span>-->
                    </span>
                    <span class="buy-btn"></span>
                    <span class="favorite-btn"></span>
                </a>
                <a href="/catalog/product-detail.php" class="product__item">
                    <!--                    <span class="label-new">Новинка</span>-->
                    <!--                                        <span class="label-hit">ХИТ</span>-->
                    <!--                    <span class="label-sale">15%</span>-->
                    <span class="product__item-img" style="background: url(/images/product-3.png) no-repeat center; background-size: auto 100%;"></span>
                    <span class="product__item-name">Подгузники на липучках Moony M (6-11 кг) 62 шт</span>
                    <span class="product__availability">В наличии</span>
                    <span class="product__prices">
<!--                        <span class="old-price">251 руб.</span>-->
                            <span class="price">251 руб.</span>
                        <!--                        <span class="new-price">251 руб.</span>-->
                    </span>
                    <span class="buy-btn"></span>
                    <span class="favorite-btn"></span>
                </a>
                <a href="/catalog/product-detail.php" class="product__item">
                    <!--                    <span class="label-new">Новинка</span>-->
                    <span class="label-hit">ХИТ</span>
                    <!--                    <span class="label-sale">15%</span>-->
                    <span class="product__item-img" style="background: url(/images/product-4.png) no-repeat center; background-size: auto 100%;"></span>
                    <span class="product__item-name">Молоко ФрутоНЯНЯ молоко с печеньем с 12 мес 200 мл</span>
                    <span class="product__availability">В наличии</span>
                    <span class="product__prices">
<!--                        <span class="old-price">251 руб.</span>-->
                                                <span class="price">35 руб.</span>
                        <!--                        <span class="new-price">251 руб.</span>-->
                    </span>
                    <span class="buy-btn"></span>
                    <span class="favorite-btn"></span>
                </a>
                <a href="/catalog/product-detail.php" class="product__item">
                    <!--                    <span class="label-new">Новинка</span>-->
                    <!--                    <span class="label-hit">ХИТ</span>-->
                    <span class="label-sale">15%</span>
                    <span class="product__item-img" style="background: url(/images/product-1.png) no-repeat center; background-size: auto 100%;"></span>
                    <span class="product__item-name">Губка для купания BabyLine минеральный комплекс с 0 мес 1 шт</span>
                    <span class="product__availability">В наличии</span>
                    <span class="product__prices">
                        <span class="old-price">251 руб.</span>
                        <!--                        <span class="price">251 руб.</span>-->
                        <span class="new-price">251 руб.</span>
                    </span>
                    <span class="buy-btn"></span>
                    <span class="favorite-btn"></span>
                </a>
                <a href="/catalog/product-detail.php" class="product__item">
                    <span class="label-new">Новинка</span>
                    <!--                    <span class="label-hit">ХИТ</span>-->
                    <!--                    <span class="label-sale">15%</span>-->
                    <span class="product__item-img" style="background: url(/images/product-2.png) no-repeat center; background-size: auto 100%;"></span>
                    <span class="product__item-name">Стиральный порошок Ушастый нянь для детского белья с 0 мес 4,5 кг</span>
                    <span class="product__availability">В наличии</span>
                    <span class="product__prices">
<!--                        <span class="old-price">251 руб.</span>-->
                        <span class="price">251 руб.</span>
                        <!--                        <span class="new-price">251 руб.</span>-->
                    </span>
                    <span class="buy-btn"></span>
                    <span class="favorite-btn"></span>
                </a>
                <a href="/catalog/product-detail.php" class="product__item">
                    <!--                    <span class="label-new">Новинка</span>-->
                    <!--                                        <span class="label-hit">ХИТ</span>-->
                    <!--                    <span class="label-sale">15%</span>-->
                    <span class="product__item-img" style="background: url(/images/product-3.png) no-repeat center; background-size: auto 100%;"></span>
                    <span class="product__item-name">Подгузники на липучках Moony M (6-11 кг) 62 шт</span>
                    <span class="product__availability">В наличии</span>
                    <span class="product__prices">
<!--                        <span class="old-price">251 руб.</span>-->
                            <span class="price">251 руб.</span>
                        <!--                        <span class="new-price">251 руб.</span>-->
                    </span>
                    <span class="buy-btn"></span>
                    <span class="favorite-btn"></span>
                </a>
                <a href="/catalog/product-detail.php" class="product__item">
                    <!--                    <span class="label-new">Новинка</span>-->
                    <span class="label-hit">ХИТ</span>
                    <!--                    <span class="label-sale">15%</span>-->
                    <span class="product__item-img" style="background: url(/images/product-4.png) no-repeat center; background-size: auto 100%;"></span>
                    <span class="product__item-name">Молоко ФрутоНЯНЯ молоко с печеньем с 12 мес 200 мл</span>
                    <span class="product__availability">В наличии</span>
                    <span class="product__prices">
<!--                        <span class="old-price">251 руб.</span>-->
                                                <span class="price">35 руб.</span>
                        <!--                        <span class="new-price">251 руб.</span>-->
                    </span>
                    <span class="buy-btn"></span>
                    <span class="favorite-btn"></span>
                </a>
                <a href="/catalog/product-detail.php" class="product__item">
                    <!--                    <span class="label-new">Новинка</span>-->
                    <!--                    <span class="label-hit">ХИТ</span>-->
                    <span class="label-sale">15%</span>
                    <span class="product__item-img" style="background: url(/images/product-1.png) no-repeat center; background-size: auto 100%;"></span>
                    <span class="product__item-name">Губка для купания BabyLine минеральный комплекс с 0 мес 1 шт</span>
                    <span class="product__availability">В наличии</span>
                    <span class="product__prices">
                        <span class="old-price">251 руб.</span>
                        <!--                        <span class="price">251 руб.</span>-->
                        <span class="new-price">251 руб.</span>
                    </span>
                    <span class="buy-btn"></span>
                    <span class="favorite-btn"></span>
                </a>
                <a href="/catalog/product-detail.php" class="product__item">
                    <span class="label-new">Новинка</span>
                    <!--                    <span class="label-hit">ХИТ</span>-->
                    <!--                    <span class="label-sale">15%</span>-->
                    <span class="product__item-img" style="background: url(/images/product-2.png) no-repeat center; background-size: auto 100%;"></span>
                    <span class="product__item-name">Стиральный порошок Ушастый нянь для детского белья с 0 мес 4,5 кг</span>
                    <span class="product__availability">В наличии</span>
                    <span class="product__prices">
<!--                        <span class="old-price">251 руб.</span>-->
                        <span class="price">251 руб.</span>
                        <!--                        <span class="new-price">251 руб.</span>-->
                    </span>
                    <span class="buy-btn"></span>
                    <span class="favorite-btn"></span>
                </a>
                <a href="/catalog/product-detail.php" class="product__item">
                    <!--                    <span class="label-new">Новинка</span>-->
                    <!--                                        <span class="label-hit">ХИТ</span>-->
                    <!--                    <span class="label-sale">15%</span>-->
                    <span class="product__item-img" style="background: url(/images/product-3.png) no-repeat center; background-size: auto 100%;"></span>
                    <span class="product__item-name">Подгузники на липучках Moony M (6-11 кг) 62 шт</span>
                    <span class="product__availability">В наличии</span>
                    <span class="product__prices">
<!--                        <span class="old-price">251 руб.</span>-->
                            <span class="price">251 руб.</span>
                        <!--                        <span class="new-price">251 руб.</span>-->
                    </span>
                    <span class="buy-btn"></span>
                    <span class="favorite-btn"></span>
                </a>
                <a href="/catalog/product-detail.php" class="product__item">
                    <!--                    <span class="label-new">Новинка</span>-->
                    <span class="label-hit">ХИТ</span>
                    <!--                    <span class="label-sale">15%</span>-->
                    <span class="product__item-img" style="background: url(/images/product-4.png) no-repeat center; background-size: auto 100%;"></span>
                    <span class="product__item-name">Молоко ФрутоНЯНЯ молоко с печеньем с 12 мес 200 мл</span>
                    <span class="product__availability">В наличии</span>
                    <span class="product__prices">
<!--                        <span class="old-price">251 руб.</span>-->
                                                <span class="price">35 руб.</span>
                        <!--                        <span class="new-price">251 руб.</span>-->
                    </span>
                    <span class="buy-btn"></span>
                    <span class="favorite-btn"></span>
                </a>
                <a href="/catalog/product-detail.php" class="product__item">
                    <!--                    <span class="label-new">Новинка</span>-->
                    <!--                    <span class="label-hit">ХИТ</span>-->
                    <span class="label-sale">15%</span>
                    <span class="product__item-img" style="background: url(/images/product-1.png) no-repeat center; background-size: auto 100%;"></span>
                    <span class="product__item-name">Губка для купания BabyLine минеральный комплекс с 0 мес 1 шт</span>
                    <span class="product__availability">В наличии</span>
                    <span class="product__prices">
                        <span class="old-price">251 руб.</span>
                        <!--                        <span class="price">251 руб.</span>-->
                        <span class="new-price">251 руб.</span>
                    </span>
                    <span class="buy-btn"></span>
                    <span class="favorite-btn"></span>
                </a>
                <a href="/catalog/product-detail.php" class="product__item">
                    <span class="label-new">Новинка</span>
                    <!--                    <span class="label-hit">ХИТ</span>-->
                    <!--                    <span class="label-sale">15%</span>-->
                    <span class="product__item-img" style="background: url(/images/product-2.png) no-repeat center; background-size: auto 100%;"></span>
                    <span class="product__item-name">Стиральный порошок Ушастый нянь для детского белья с 0 мес 4,5 кг</span>
                    <span class="product__availability">В наличии</span>
                    <span class="product__prices">
<!--                        <span class="old-price">251 руб.</span>-->
                        <span class="price">251 руб.</span>
                        <!--                        <span class="new-price">251 руб.</span>-->
                    </span>
                    <span class="buy-btn"></span>
                    <span class="favorite-btn"></span>
                </a>
            </div>
            <div class="pagenavigation">
                <a href="#" class="nav__prev">Назад</a>
                <a href="#" class="nav__page active">1</a>
                <a href="#" class="nav__page">2</a>
                <a href="#" class="nav__page">3</a>
                <a href="#" class="nav__dots">...</a>
                <a href="#" class="nav__page">8</a>
                <a href="#" class="nav__next">Вперед</a>
            </div>
        </div>
    </div>
</div>
<?include('../footer.php');?>