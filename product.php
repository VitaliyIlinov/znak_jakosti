<?php include 'header.php'; ?>
<div class="content">
    <div class="bg-square-yellow marg-bot-150">
        <div class="container">
            <div class="col-lg-8 col-md-7 col-sm-7">
                <div class="img-product" style="background-image: url(/images/product/borsch.jpg);"></div>
                <!--            <img style="max-height: 440px;min-width: 100%;" src="/images/product/borsch.jpg" class="img-responsive">-->
            </div>
            <div class="col-lg-4 col-md-5 col-sm-5">
                <div class="product-text">
                    <div>
                        <h2>Борщ <br> украинский </h2>
                        <p> свекла, картофель, морковь, лук, капуста белокочанная, бульон костный, свинина, томатная
                            паста
                        </p>
                        <p>
                            Вес: 300/50 грамм
                        </p>
                        <p>Количество <input type="number" min="1" value="1" class="num"></p>
                        <hr>
                        <div class="clearfix">
                            <p class="left">
                                <span class="fa-lg fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                <span class="fa-lg fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                <span class="fa-lg fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                <span class="fa-lg fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                <span class="fa-lg fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                            </p>
                            <p class="p-price">15.00 грн.</p>
                        </div>
                        <a class="price" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">5
                            отзывов</a>
                        <!--                    <p class="price">5 отзывов</p>-->
                        <a class="link-2" href=""
                           onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Написать отзыв</a>
                    </div>
                    <button class="own_btn buy">Купить</button>
                </div>

            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
