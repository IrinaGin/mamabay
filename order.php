<?include('header.php');?>
<div class="order">
    <div class="wrap">
        <h1>Оформление заказа</h1>
        <form action="" class="order-form">
            <div class="order-left">
                <div class="basket-left__top">
                    <a href="/basket.php" class="to-catalog__link">Вернуться в корзину</a>
                </div>
                <div class="order-form">
                    <div class="order-form__item">
                        <div class="order-form__item-title">Личные данные</div>
                        <div class="input-holder">
                            <div class="input__name">Имя</div>
                            <input type="text" name="name" class="input">
                        </div>
                        <div class="input-holder">
                            <div class="input__name">Телефон</div>
                            <input type="text" name="phone" class="input">
                        </div>
                        <div class="input-holder">
                            <div class="input__name">E-mail*</div>
                            <input type="text" name="mail" required class="input">
                        </div>
                    </div>
                    <div class="order-form__item">
                        <div class="order-form__item-title">Способ оплаты</div>
                        <div class="payment-list">
                            <label for="pay1" class="pay-item radio-holder"><span class="radio-box"></span><input type="radio" id="pay1" class="pay-radio" name="pay"> Наличными курьеру</label>
                            <label for="pay2" class="pay-item radio-holder"><span class="radio-box"></span><input type="radio" id="pay2" class="pay-radio" name="pay"> Картой курьеру</label>
                            <label for="pay3" class="pay-item radio-holder"><span class="radio-box"></span><input type="radio" id="pay3" class="pay-radio" name="pay"> Картой на сайте
                                <span class="pay-sist-icons">
                                    <span class="pay-sist-ico visa"></span>
                                    <span class="pay-sist-ico master"></span>
                                    <span class="pay-sist-ico maesrto"></span>
                                    <span class="pay-sist-ico mir"></span>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="order-form__item">
                        <div class="order-form__item-title">Способ получения заказа</div>
                        <div class="tabs__links order-tabs__link">
                            <span class="move-box"></span>
                            <input type="hidden" name="delivery-type">
                            <a href="#delivery1" class="tabs__link active" data-class="left" data-name="yourself">Самовывоз</a>
                            <a href="#delivery2" class="tabs__link" data-class="right-is2" data-name="delivery">Доставка</a>
                        </div>
                        <div class="tabs__items">
                            <div class="tabs__item active" data-tab="#delivery1">
                                <div class="oreder-delivery__text">Вы можете забрать свой заказ по адресу:</div>
                                <div class="order-delivery__address">г.Ярославль, ул.Рыбинская, д.25, корп.2, офис 4</div>
                                <a href="#" class="to-map__link">Смотреть на карте</a>
                                <div class="input-holder">
                                    <div class="input__name">Комментарий к заказу</div>
                                    <textarea name="comment" id=""  rows="5" class="input"></textarea>
                                </div>
                            </div>
                            <div class="tabs__item" data-tab="#delivery2">
                                <div class="delivery-list">
                                    <label for="delivery1" class="delivery-item radio-holder"><span class="radio-box"></span><input type="radio" id="delivery1" class="delivery-radio" name="delivery">
                                        <span class="delivery__item-title">Стандартная доставка по городу</span>
                                        <span class="delivery__item-text">100 руб. Бесплатно от 1000 руб.</span>
                                    </label>
                                    <label for="delivery2" class="delivery-item radio-holder"><span class="radio-box"></span><input type="radio" id="delivery2" class="delivery-radio" name="delivery">
                                        <span class="delivery__item-title">Экспресс-доставка по городу</span>
                                        <span class="delivery__item-text">150 руб. Бесплатно от 5000 руб.</span>
                                    </label>
                                    <label for="delivery3" class="delivery-item radio-holder"><span class="radio-box"></span><input type="radio" id="delivery3" class="delivery-radio" name="delivery">
                                        <span class="delivery__item-title">Резинотехника; Толгоболь; Норское; Дубки; Карабиха; Красные ткачи; Кузнечиха; Мостец; Зеленый Бор</span>
                                        <span class="delivery__item-text">300 руб. При заказе от 1000 руб. стоимость доставки 200 руб. Бесплатно от 5000 руб.</span>
                                    </label>
                                </div>
                                <div class="delivery-address">
                                    <div class="delivery-address__title">Адрес доставки</div>
                                    <div class="input-holder">
                                        <div class="input__name">Город*</div>
                                        <input type="text" name="city" class="input">
                                    </div>
                                    <div class="input-holder">
                                        <div class="input__name">Улица*</div>
                                        <input type="text" name="street" class="input">
                                    </div>
                                    <div class="input-holder input__is-4">
                                        <div class="input__name">Дом*</div>
                                        <input type="text" name="house" class="input">
                                    </div>
                                    <div class="input-holder input__is-4">
                                        <div class="input__name">Подъезд</div>
                                        <input type="text" name="entrance" class="input">
                                    </div>
                                    <div class="input-holder input__is-4">
                                        <div class="input__name">Этаж</div>
                                        <input type="text" name="floor" class="input">
                                    </div>
                                    <div class="input-holder input__is-4 last">
                                        <div class="input__name">Квартира*</div>
                                        <input type="text" name="apartment" required class="input">
                                    </div>
                                    <div class="input-holder input__is-2">
                                        <div class="input__name">День доставки</div>
                                        <input type="date" name="delivery-date"  class="input">
                                    </div>
                                    <div class="input-holder input__is-2 last">
                                        <div class="input__name">Время доставки</div>
                                        <input type="time" name="delivery-time"  class="input">
                                    </div>
                                    <div class="input-holder">
                                        <div class="input__name">Комментарий к заказу</div>
                                        <textarea name="comment" id=""  rows="5" class="input"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="order-right">
                    <div class="order-basket__items">
                        <div class="order-basket__items-top">
                            <span class="order-basket__items-title">Ваш заказ</span><span class="order-basket__items-count">3 товара</span>
                        </div>
                        <div class="basket-pop__list order-products__list">
                            <a href="/catalog/product-detail.php" class="basket-pop__item">
                                <span class="basket-pop__item-img"><img src="/images/product-3.png" alt=""></span>
                                <span class="basket-pop__item-name">Подгузники на липучках Moony M (6-11 кг) 62 шт</span>
                                <span class="basket-pop__item-price">251 руб.</span>
                                <span class="basket-pop__item-count">1 х 251 руб.</span>
                            </a>
                            <a href="/catalog/product-detail.php" class="basket-pop__item">
                                <span class="basket-pop__item-img"><img src="/images/product-2.png" alt=""></span>
                                <span class="basket-pop__item-name">Стиральный порошок Ушастый нянь для детского белья с 0 мес 4,5 кг</span>
                                <span class="basket-pop__item-price">251 руб.</span>
                                <span class="basket-pop__item-count">1 х 251 руб.</span>
                            </a>
                            <a href="/catalog/product-detail.php" class="basket-pop__item">
                                <span class="basket-pop__item-img"><img src="/images/product-4.png" alt=""></span>
                                <span class="basket-pop__item-name">Молоко ФрутоНЯНЯ молоко с печеньем с 12 мес 200 мл</span>
                                <span class="basket-pop__item-price">251 руб.</span>
                                <span class="basket-pop__item-count">1 х 251 руб.</span>
                            </a>
                            <a href="/catalog/product-detail.php" class="basket-pop__item">
                                <span class="basket-pop__item-img"><img src="/images/product-3.png" alt=""></span>
                                <span class="basket-pop__item-name">Подгузники на липучках Moony M (6-11 кг) 62 шт</span>
                                <span class="basket-pop__item-price">251 руб.</span>
                                <span class="basket-pop__item-count">1 х 251 руб.</span>
                            </a>
                        </div>
                        <div class="order-basket__prices">
                            <table>
                                <tr class="will-hide">
                                    <td>Итого</td>
                                    <td>537 руб.</td>
                                </tr>
                                <tr class="will-hide">
                                    <td>Доставка</td>
                                    <td>100 руб.</td>
                                </tr>
                                <tr>
                                    <td>К оплате</td>
                                    <td>537 руб.</td>
                                </tr>
                            </table>
                            <span class="basket-left__top-text will-hide">Бесплатная доставка от 1000 руб.</span>
                        </div>
                        <div class="order-basket__bottom">
                            <label class="agree-holder">
                                <span class="agree-box"></span>
                                <input type="checkbox" name="agree" required class="agree">
                                Даю согласие на обработку данных
                            </label>
                            <button type="submit" class="btn order__submit">Готово</button>
                        </div>
                    </div>
            </div>
        </form>
    </div>
</div>
<?include('footer.php');?>