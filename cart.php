<?php include 'header.php'; ?>

<section class="cart-inner">
    <div class="container">
        <h1 class="title cl-brown text-center mb-4 mb-md-5">корзина</h1>
        <form action="" class="form" method="post">
            <div class="for-cart">
                <div class="cart-block text-center">
                    <div class="cart-row cart-head cl-brown fw-bold tt-upper">
                        <div class="row flex-nowrap align-items-center">
                            <div class="col-auto col-lg-4 text-start">
                                <div class="tit text-dark cc-1">продукт</div>
                            </div>
                            <div class="col-auto col-lg">
                                <div class="tit cc-2">объем</div>
                            </div>
                            <div class="col-auto col-lg">
                                <div class="tit cc-3">цвет</div>
                            </div>
                            <div class="col-auto col-lg">
                                <div class="tit cc-4">количество</div>
                            </div>
                            <div class="col-auto col-lg">
                                <div class="tit cc-5">цена</div>
                            </div>
                            <div class="col-auto col-lg">
                                <div class="tit cc-6">стоимость</div>
                            </div>
                            <div class="col-auto for-trash">
                                <div class="cc-7 trash"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cart-row cart-product">
                        <div class="row flex-nowrap align-items-center">
                            <div class="col-auto col-lg-4">
                                <div class="product-info cc-1 d-flex align-items-center text-start">
                                    <div class="pic me-3">
                                        <img src="images/pr1.jpg" alt="pic">
                                    </div>
                                    <div class="name fs-xl-24 fs-16 fw-bold tt-upper">LEATHER CARE KIT</div>
                                </div>
                            </div>
                            <div class="col-auto col-lg">
                                <div class="size cc-2">
                                    <select name="size">
                                        <option value="500 мл">500 мл</option>
                                        <option value="600 мл">600 мл</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-auto col-lg">
                                <div class="color cc-3"></div>
                            </div>
                            <div class="col-auto col-lg">
                                <div class="counts cc-4">
                                    <input class="text-center" name="quantity" value="1" min="1" max="99" type="number">
                                </div>
                            </div>
                            <div class="col-auto col-lg">
                                <div class="price cc-5 text-dark fs-xl-24 fs-16 fw-normal">24.95 EUR</div>
                            </div>
                            <div class="col-auto col-lg">
                                <div class="summ-price cc-6 fs-xl-24 fs-16">49.90 EUR</div>
                            </div>
                            <div class="col-auto for-trash">
                                <a href="#" class="trash cc-7">
                                    <img src="images/trash.png" alt="trash">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="cart-row cart-product">
                        <div class="row flex-nowrap align-items-center">
                            <div class="col-auto col-lg-4">
                                <div class="product-info cc-1 d-flex align-items-center text-start">
                                    <div class="pic me-3">
                                        <img src="images/pr1.jpg" alt="pic">
                                    </div>
                                    <div class="name fs-xl-24 fs-16 fw-bold tt-upper">LEATHER CARE KIT</div>
                                </div>
                            </div>
                            <div class="col-auto col-lg">
                                <div class="size cc-2"></div>
                            </div>
                            <div class="col-auto col-lg">
                                <div class="color cc-3">
                                    <select name="color">
                                        <option value="Medium Brown BR04">Medium Brown BR04</option>
                                        <option value="Medium Brown BR04">Medium Brown BR04</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-auto col-lg">
                                <div class="counts cc-4">
                                    <input class="text-center" name="quantity" value="1" min="1" max="99" type="number">
                                </div>
                            </div>
                            <div class="col-auto col-lg">
                                <div class="price cc-5 text-dark fs-xl-24 fs-16 fw-normal">24.95 EUR</div>
                            </div>
                            <div class="col-auto col-lg">
                                <div class="summ-price cc-6 fs-xl-24 fs-16">49.90 EUR</div>
                            </div>
                            <div class="col-auto for-trash">
                                <a href="#" class="trash cc-7">
                                    <img src="images/trash.png" alt="trash">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart-products-result mt-5">
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
                    <div class="cpr-bottom">
                        <div class="for-promo">
                            <div class="tit fs-xl-20 fs-md-18 fs-16 tt-upper fw-bold mb-3">промокод</div>
                            <div class="promo d-flex">
                                <div class="inputblock">
                                    <input class="error" name="promo" type="text">
                                    <div class="error text-center fs-12 fs-md-14 mt-2">Неверный промокод</div>
                                </div>
                                <a href="#" class="check-btn fs-xl-20 fs-16 tt-upper">применить</a>
                            </div>
                        </div>
                        <div class="order">
                            <button class="cl-btn to-cart" type="submit">
                                ПЕРЕЙТИ К ОФОРМЛЕНИЮ ЗАКАЗА
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<?php include 'footer.php'; ?>
