<?include('header.php');?>
<div class="basket padding-top">
    <div class="wrap">
        <h1>Корзина</h1>
        <div class="basket-left">
            <div class="basket-left__top">
                <a href="/catalog/" class="to-catalog__link">Вернуться к покупкам</a><span class="basket-left__top-text">Бесплатная доставка от 1000 руб.</span>
            </div>
            <div class="basket__items">
                <table class="basket__items-table">
                    <tr>
                        <td></td>
                        <td>Наименование товара</td>
                        <td>Цена</td>
                        <td>Количество</td>
                        <td>Сумма</td>
                        <td>Удалить</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="catalog/product-detail.php" class="basket__item-img" style="background: url(images/product-3.png) no-repeat center; background-size: cover;"></a>
                        </td>
                        <td>
                            <a href="/catalog/product-detail.php" class="basket__item-name">Подгузники на липучках Moony M (6-11 кг) 62 шт</a>
                        </td>
                        <td>
                            <span class="basket__item-prices">
                                <span class="old-price">251 руб.</span>
<!--                                <span class="price">251 руб.</span>-->
                                <span class="new-price">251 руб.</span>
                            </span>
                        </td>
                        <td>
                            <div class="product-detail__count-culck basket__item-count">
                                <span class="minus">-</span>
                                <input class="znach" type="number" min="0" value="1">
                                <span class="plus">+</span>
                            </div>
                        </td>
                        <td>
                            <div class="basket__item-summ">251 руб.</div>
                        </td>
                        <td>
                            <a href="#" class="basket__item-remove"></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="catalog/product-detail.php" class="basket__item-img" style="background: url(images/product-1.png) no-repeat center; background-size: cover;"></a>
                        </td>
                        <td>
                            <a href="catalog/product-detail.php" class="basket__item-name">Губка для купания BabyLine минеральный комплекс с 0 мес 1 шт</a>
                        </td>
                        <td>
                            <span class="basket__item-prices">
<!--                                <span class="old-price">251 руб.</span>-->
                                    <span class="price">251 руб.</span>
<!--                                <span class="new-price">251 руб.</span>-->
                            </span>
                        </td>
                        <td>
                            <div class="product-detail__count-culck basket__item-count">
                                <span class="minus">-</span>
                                <input class="znach" type="number" min="0" value="1">
                                <span class="plus">+</span>
                            </div>
                        </td>
                        <td>
                            <div class="basket__item-summ">251 руб.</div>
                        </td>
                        <td>
                            <a href="#" class="basket__item-remove"></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="catalog/product-detail.php" class="basket__item-img" style="background: url(images/product-2.png) no-repeat center; background-size: cover;"></a>
                        </td>
                        <td>
                            <a href="catalog/product-detail.php" class="basket__item-name">Стиральный порошок Ушастый нянь для детского белья с 0 мес 4,5 кг</a>
                        </td>
                        <td>
                            <span class="basket__item-prices">
                                <span class="old-price">251 руб.</span>
                                <!--                                <span class="price">251 руб.</span>-->
                                <span class="new-price">251 руб.</span>
                            </span>
                        </td>
                        <td>
                            <div class="product-detail__count-culck basket__item-count">
                                <span class="minus">-</span>
                                <input class="znach" type="number" min="0" value="1">
                                <span class="plus">+</span>
                            </div>
                        </td>
                        <td>
                            <div class="basket__item-summ">251 руб.</div>
                        </td>
                        <td>
                            <a href="#" class="basket__item-remove"></a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="basket-right">
            <form class="promo-cod">
                <div class="input-holder">
                    <div class="input__name">Есть промо-код?</div>
                    <input type="text" class="input" name="cod">
                    <a href="#" class="input-btn promo-cod__btn"></a>
                </div>
            </form>
            <div class="end-price">
                <span> Итого:</span><span>537 руб.</span>
            </div>
            <a href="/order.php" class="btn checkout-btn">Оформить заказ</a>
        </div>
        <div class="related-products">
            <div class="related-products__title title">Сопутствующие товары</div>
            <div class="product__items owl-carousel" data-new-prod >
                <a href="/catalog/product-detail.php" class="product__item">
                    <!--<span class="label-new">Новинка</span>-->
                    <span class="label-hit">ХИТ</span>
                    <!--<span class="label-sale">15%</span>-->
                    <span class="product__item-img" style="background: url(/images/product-1.png) no-repeat center; background-size: auto 100%;"></span>
                    <span class="product__item-name">Губка для купания BabyLine минеральный комплекс с 0 мес 1 шт</span>
                    <span class="product__availability">В наличии</span>
                    <span class="product__prices">
                    <!--<span class="old-price">251 руб.</span>-->
                    <span class="price">251 руб.</span>
                        <!--<span class="new-price">251 руб.</span>-->
                    </span>
                    <span class="buy-btn"></span>
                    <span class="favorite-btn"></span>
                </a>
                <a href="/catalog/product-detail.php" class="product__item">
                    <!--<span class="label-new">Новинка</span>-->
                    <span class="label-hit">ХИТ</span>
                    <!--<span class="label-sale">15%</span>-->
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
                    <span class="label-hit">ХИТ</span>
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
            </div>
        </div>
    </div>
</div>
<?include('footer.php');?>