// Предыдущее значение скролла
var scrollPrev = 0;
function on_scroll() {
    var st = $(window).scrollTop();
    if($(window).width() > 1024){
        if (st > 163) {
            $("header").addClass("header--tiny");
            $("body").addClass("has-padding");
        }
        var scrolled = $(window).scrollTop(); // Высота скролла в px
        //скроллим вниз
        if ( scrolled > scrollPrev && scrolled > 140) {
            $("header").removeClass("header--all");
            //скроллим вверх
        } else {
            $("header").addClass("header--all");
        }
        // Присваеваем текущее значение скролла предыдущему
        scrollPrev = scrolled;
    }else{
        var scrolled = $(window).scrollTop(); // Высота скролла в px
        //скроллим вниз
        if ( scrolled > scrollPrev && scrolled > 140) {
            $("header").addClass("search-toggle");
            //скроллим вверх
        } else {
            $("header").removeClass("search-toggle");
        }
        // Присваеваем текущее значение скролла предыдущему
        scrollPrev = scrolled;
        // ховер для карзины в шапке
        $('.basket-link').hover(function () {
            $(this).find('.basket-pop').animate({
                height: "show"
            }, 200)
        }, function () {
            $(this).find('.basket-pop').animate({
                height: "hide"
            }, 400)
        });
    }
}
function groupsChanged(event) {
    var i = (event.item.index ) % event.item.count;
    $("[data-groups-slide]").removeClass('active');
    $("[data-groups-slide]").eq(i).addClass("active");

}

$(document).ready(function() {
//сладеры
    $("[data-top-slider]").owlCarousel({
        items: 1,
        loop: false,
        margin: 0,
        nav: true,
        dots: true
    });
    $("[data-new-prod]").owlCarousel({
        responsive: {
            0: {

            },
            560: {
                items: 2
            },
            858: {
                items: 3
            },
            1100:{
                items: 4
            }
        },
        // items: 4,
        loop: false,
        margin: 0,
        nav: true,
        dots: false,
        autoWidth:true
    });
    $("[data-brands]").owlCarousel({
        items: 1,
        loop: false,
        margin: 0,
        nav: true,
        dots: false,
        // autoWidth:true
    });
    $("[data-inst]").owlCarousel({
        responsive: {
            0: {
                items: 1
            },
            560: {
                items: 2
            },
            858: {
                items: 3
            },
            1100:{
                items: 4
            }
        },
        loop: false,
        margin: 0,
        nav: true,
        dots: false,
        autoWidth:true
    });
    $("[data-product-slider]").owlCarousel({
        items: 1,
        loop: false,
        margin: 0,
        nav: true,
        dots: false,
        onChanged: groupsChanged
    });
//смена картинок в детальной товара
    var owlG = $("[data-product-slider]");
    $("[data-groups-slide]").click(function() {
        event.preventDefault();
        $("[data-groups-slide]").removeClass('active');
        $(this).addClass('active');
        owlG.trigger('to.owl.carousel', [$(this).attr('data-groups-slide')]);
    });
//добавить товар в избранное
    $('.favorite-btn, .product-detail__favorite-btn').click(function () {
       event.preventDefault();
       if($(this).hasClass('active')){
           $(this).removeClass('active');
       }else{
           $(this).addClass('active');
       }
    });
//смена табов
    $('.tabs__link').click(function () {
       event.preventDefault();
        var val = $(this).attr('href');
        $('.tabs__link').removeClass('active');
        $('[data-tab]').removeClass('active');
        $(this).addClass('active');
        $(this).parent().parent().find('[data-tab="'+val+'"]').addClass('active');
        $(this).parent().find('.move-box').attr('class', 'move-box '+$(this).data('class'));
    });
//открытие подменю у левого меню
    $('.left-menu__item.parent').click(function () {
        event.preventDefault();
        $(this).parent().toggleClass('active');
        $(this).parent().find('ul').animate({
            height: "toggle"
        }, 300);
    });
//открытие фильтров в каталоге
    $('.catalog-filter__item a').click(function () {
        event.preventDefault();
        $(this).parent().toggleClass('active');
        $(this).parent().find('.catalog-filter__sub-item').animate({
            height: "toggle"
        }, 300);
    });
//ползунки в фильтре каталога
    $(".slider").slider({
        animate: true,
        range: true,
        min: 345,
        max: 5600,
        step: 1,
        values: [ 1200, 3400],
        slide: function( event, ui ) {
             $(this).parents('.catalog-filter__sub-item').find('.sub-input-holder input.min').attr('value', ui.values[0]);
             $(this).parents('.catalog-filter__sub-item').find('.sub-input-holder input.max').attr('value', ui.values[1]);
        }
    });
//смена значений цены в фильтре каталога при перемещении ползунков
    $('.sub-input-holder input.min').text($(".slider").slider("values", 0));
    $('.sub-input-holder input.max').text($(".slider").slider("values", 1));
//открытие описания на деьальной странице товара
    $('.product-detail__descr-name').click(function () {
        $(this).parent().toggleClass('opened');
        $(this).parent().find('.product-detail__descr-text').animate({
            height: "toggle"
        }, 300)
    });
//клик по чекбоксам
    $(document).on('change', 'input[type="checkbox"]', function(){
        if ($(this).is(":checked")) {
            $(this).closest(".agree-holder").toggleClass('checked');
        } else {
            $(this).closest(".agree-holder").removeClass('checked');
        }
    }).on('click', '.promo-remove', function (e) {
//отменить промокод
        e.preventDefault();
        newText = '<div class="input-holder">\n' +
            '<div class="input__name">Есть промо-код?</div>' +
            '<input type="text" class="input" name="cod">' +
            '<a href="#" class="input-btn promo-cod__btn"></a>' +
            '</div>';
        $(this).parents('.promo-cod').html(newText);
    }).on('click', '.promo-cod__btn',function () {
//применить промокод
        event.preventDefault();
        console.log('123');
        $(this).parent().find('input').removeClass('error');
        if($(this).parent().find('input').val()){
            var newText = '<div>Спасибо, ваш промо-код применен!</div> <br> <a href="#" class="promo-remove">Отменить промокод</a>';
            $(this).parents('.promo-cod').html(newText);
        }else{
            $(this).parent().find('input').addClass('error');
        }
    });
//клик по радиокнопкам
    $('.radio-holder').click(function () {
        $(this).parent().find('.radio-holder').removeClass('selected');
        $(this).toggleClass('selected');
    });
//удаление товаров из корзины
    $('.basket__item-remove').click(function (e) {
        e.preventDefault();
       $(this).parents('tr').animate({
           opacity: "0"
       }, 300, function () {
           $(this).remove();
       })
    });
//смена количества товаров
    $('.minus, .plus').click(function (e) {
        e.preventDefault();
        var oldZnach = $(this).parent().find('.znach').val();
        var newZnach;
        if($(this).hasClass('minus')){
            newZnach = parseInt(oldZnach) - 1;
        }else{
            newZnach = parseInt(oldZnach) + 1;
        }
        if(newZnach < 0 ){
            $(this).parent().find('.znach').val(0);
        }else{
            $(this).parent().find('.znach').val(newZnach);
        }
        if($('.product-detail__count-summ').length){
            var newPrice = parseInt($('.product-detail__price span').text()) * newZnach;
                $('[data-prodSumm]').html(newPrice);
        }
        if($('.basket__item-summ').length){
            newPrice = parseInt($('.basket__item-prices .price').text()) * newZnach;
            $('.basket__item-summ').html(newPrice + ' руб.');
        }
    });
    $('.znach').change(function (e) {
        e.preventDefault();
        var oldZnach = $(this).val();
        if($('.product-detail__count-summ').length){
            var newPrice = parseInt($('.product-detail__price span').text()) * oldZnach;
            $('[data-prodSumm]').html(newPrice);
        }
        if($('.basket__item-summ').length){
            newPrice = parseInt($('.basket__item-prices .price').text()) * oldZnach;
            $('.basket__item-summ').html(newPrice + ' руб.');
        }
    });
//убираем лишнее из итоговой цены в оформлении заказа, если итемов больше 10
    if($('.order-products__list').length){
        if($('.order-products__list').find('.basket-pop__item').length > 10){
            $('.order-basket__prices').find('.will-hide').hide();
        }else{
            $('.order-basket__prices').find('.will-hide').show();
        }
    }
//значения способа доставки для инпута в форме заказа
    $('.order-tabs__link a').click(function () {
        console.log($(this).attr('data-name'));
       $(this).parent().find('input[type="hidden"]').val($(this).attr('data-name'));
    });

    $('.burger').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('active');
        $('.header-menu').animate({
            height: "toggle"
        },200);
    });
    $('.menu-bot-info > a').click(function (e) {
        e.preventDefault();
        $(this).parent().toggleClass('active');
        $(this).parent().find('.mobile-sub-menu').animate({
            height: "toggle"
        },200);
    });
    $('.sort-filter').click(function () {
       $('.catalog-filter__form').animate({
           height: "toggle"
       }, 200);
    });
    $('.footer__column').click(function () {
       $(this).toggleClass('active');
        $(this).find('ul').animate({
            height: "toggle"
        },200);
    });



    $(window).resize(function() {
        on_scroll();
    });
    on_scroll();
    $(window).scroll(function() {
        on_scroll();
    });


});