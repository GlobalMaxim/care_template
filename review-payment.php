<?php include 'header.php'; ?>

<section class="order-inner review-inner">
    <div class="container">
        <div class="current-order-page text-center">
            <div class="row">
                <div class="col-3">
                    <div class="c-block active">
                        <div class="circle fs-48 fw-bold cl-brown">
                            <div class="c-inner">
                                <img class="mw-100" src="images/ok.png" alt="ok">
                            </div>
                        </div>
                        <p class="fs-xl-24 fs-md-18 fs-12 fw-bold mt-3">Наполнение <br> корзины</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="c-block active">
                        <div class="circle fs-48 fw-bold cl-brown">
                            <div class="c-inner">
                                <img class="mw-100" src="images/ok.png" alt="ok">
                            </div>
                        </div>
                        <p class="fs-xl-24 fs-md-18 fs-12 fw-bold mt-3">Способ и адрес <br> доставки</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="c-block active">
                        <div class="circle fs-48 fw-bold cl-brown">
                            <div class="c-inner">
                                3
                            </div>
                        </div>
                        <p class="fs-xl-24 fs-md-18 fs-12 fw-bold mt-3">Проверка заказа <br> и оплата</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="c-block">
                        <div class="circle fs-48 fw-bold cl-brown">
                            <div class="c-inner">
                                4
                            </div>
                        </div>
                        <p class="fs-xl-24 fs-md-18 fs-12 fw-bold mt-3">Успех!</p>
                    </div>
                </div>
            </div>
        </div>
        <form action="" class="form" method="post">
            <div class="data-row">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-7 col-xl-8">
                        <div class="data-check">
                            <div class="dc-top">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="tit fs-xl-30 fs-md-20 fs-18 tt-upper cl-brown-l">
                                            ПРОВЕРКА ВВЕДЕННЫХ ДАННЫХ
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <a class="change-btn d-flex align-items-center cl-brown-l tt-upper" href="">
                                            <p class="d-none d-md-block me-3">Изменить</p>
                                            <span class="icon">
                                                <img src="images/reduct.png" alt="reduct">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="dc-main fs-xxl-24 fs-md-19 fs-16">
                                <div class="dc-block dc-1 mb-4 mb-md-5">
                                    <p>Имя: Александр</p>
                                    <p>Фамилия: Черновский</p>
                                    <p>Телефон: +3716754567</p>
                                    <p>E-mail: alex.che@gmail.com</p>
                                </div>
                                <div class="dc-block dc-2 mb-3">
                                    <div class="tit fw-bold cl-brown-l mb-2">Способ доставки:</div>
                                    <p>Почтовая доставка</p>
                                </div>
                                <div class="dc-block dc-3">
                                    <div class="tit fw-bold cl-brown-l mb-2">Адрес доставки:</div>
                                    <p>Латвия, Рига, Ганибу дамбис 24а, LV-1005</p>
                                </div>
                                <div class="checks mt-4">
                                    <input id="checky" class="checky" type="checkbox" checked>
                                    <label class="info" for="checky">
                                        Я согласен с <a href="">условиями использования сайта</a>, доставки, обмена и возврата товара
                                    </label>
                                </div>
                                <div class="buttons fs-xl-20 fs-18 mt-5">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-xl-auto">
                                            <div class="order">
                                                <button class="cl-btn to-cart" type="submit">
                                                    оплатить картой
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-auto my-3 my-xl-0">
                                            <div class="or">или</div>
                                        </div>
                                        <div class="col-12 col-xl-auto">
                                            <div class="order">
                                                <a class="cl-btn bordered" href="#">
                                                    Получить счет на e-mail
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5 col-xl-4 mt-5 mt-md-0">
                        <div class="cart-products-result">
                            <div class="cpr-block ms-md-auto">
                                <div class="cpr-rows">
                                    <div class="cp-row">
                                        <div class="cp-tit">Сумма корзины</div>
                                        <div class="cp-price">74.85 EUR</div>
                                    </div>
                                    <div class="cp-row">
                                        <div class="cp-tit">Доставка</div>
                                        <div class="cp-price">0.00 EUR</div>
                                    </div>
                                    <div class="cp-row">
                                        <div class="cp-tit">СТОИМОСТЬ БЕЗ НДС</div>
                                        <div class="cp-price">61.86 EUR</div>
                                    </div>
                                    <div class="cp-row">
                                        <div class="cp-tit">ндс</div>
                                        <div class="cp-price">12.99 EUR</div>
                                    </div>
                                </div>
                                <div class="cp-row summ-row fw-bold">
                                    <div class="cp-tit">Всего к оплате</div>
                                    <div class="cp-price cl-brown">74.85 EUR</div>
                                </div>
                                <div class="products-to-buy">
                                    <div class="tit">вы покупаете</div>
                                    <div class="ptb-block">
                                        <div class="pic">
                                            <img src="images/pr1.jpg" alt="product">
                                        </div>
                                        <div class="ptb-info">
                                            <div class="name"></div>
                                            <div class="info">
                                                <p><span class="fw-bold">Объём/размер:</span> 500 мл</p>
                                                <p><span class="fw-bold">Цвет:</span> Medium Brown BR04</p>
                                                <p><span class="fw-bold">Количество:</span> 1</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ptb-block">
                                        <div class="pic">
                                            <img src="images/pr1.jpg" alt="product">
                                        </div>
                                        <div class="ptb-info">
                                            <div class="name"></div>
                                            <div class="info">
                                                <p><span class="fw-bold">Объём/размер:</span> 500 мл</p>
                                                <p><span class="fw-bold">Цвет:</span> Medium Brown BR04</p>
                                                <p><span class="fw-bold">Количество:</span> 1</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<?php include 'footer.php'; ?>
