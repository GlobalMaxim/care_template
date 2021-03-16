<?php include 'header.php'; ?>

<section class="order-inner shipping-inner">
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
                        <div class="data-blocks">
                            <div class="dt-block">
                                <div class="tit">КОНТАКТНЫЕ ДАННЫЕ</div>
                                <div class="inputs">
                                    <div class="inputblock">
                                        <p>Ваше Имя <span class="req">*</span></p>
                                        <input name="name" type="text">
                                    </div>
                                    <div class="inputblock">
                                        <p>Ваша Фамилия <span class="req">*</span></p>
                                        <input name="sername" type="text">
                                    </div>
                                    <div class="inputblock">
                                        <p>Ваш телефон <span class="req">*</span></p>
                                        <input name="phone" type="tel">
                                    </div>
                                    <div class="inputblock">
                                        <p>Ваш e-mail <span class="req">*</span></p>
                                        <input name="email" type="email">
                                    </div>
                                </div>
                            </div>
                            <div class="dt-block">
                                <div class="tit">Способ доставки</div>
                                <div class="inputs">
                                    <div class="inputblock d-block d-xl-flex">
                                        <p class="for-select">Выберите удобный вам способ доставки</p>
                                        <select name="delivery" class="w-100 mt-3 mt-xl-0">
                                            <option hidden selected>Почтовая доставка</option>
                                            <option value="Medium Brown BR04">Medium Brown BR04</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="dt-block">
                                <div class="tit">Адрес доставки</div>
                                <div class="inputs">
                                    <div class="inputblock">
                                        <p>Страна <span class="req">*</span></p>
                                        <input name="country" type="text">
                                    </div>
                                    <div class="inputblock">
                                        <p>Город <span class="req">*</span></p>
                                        <input name="city" type="text">
                                    </div>
                                    <div class="inputblock">
                                        <p>Адрес <span class="req">*</span></p>
                                        <input name="address" type="text">
                                    </div>
                                    <div class="inputblock">
                                        <p>ZIP код (индекс) <span class="req">*</span></p>
                                        <input name="zip" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="order text-center text-md-end mt-5">
                            <button class="cl-btn to-cart" type="submit">
                                ПЕРЕЙТИ К ОПЛАТЕ
                            </button>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5 col-xl-4 mt-5 mt-md-0 d-none d-md-block">
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
                                    <div class="cp-row summ-row fw-bold">
                                        <div class="cp-tit">Всего к оплате</div>
                                        <div class="cp-price cl-brown">74.85 EUR</div>
                                    </div>
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
