<?php include 'header.php'; ?>
<div class="content">
<div class="bg-square-yellow marg-bot-150">
    <div class="container">
        <div class="col-lg-8 col-md-7 col-sm-7">
            <div class="img-product" style=" background-image: url();"></div>
            <div style="height: 110px;position: relative">
                <ul class="complex-slides">
                    <li><img class="img-responsive comp-active" src="/images/product/borsch.jpg"></li>
                    <li><img class="img-responsive" src="/images/photo1.jpg"></li>
                    <li><img class="img-responsive" src="/images/product/borsch.jpg"></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-5 col-sm-5">
            <div class="product-text complex" style="min-height: 550px">
                <div>
                    <h2>Комплекс №1</h2>
                    <h5 class="active"><span></span>Салат "Вкусненький"</h5>
                    <p style="display: block">
                        свекла, картофель, морковь, лук, капуста белокочанная, бульон костный, свинина, томатная
                        паста
                    </p>
                    <h5><span></span>Салат "Вкусненький"</h5>
                    <p>
                        свекла, картофель, морковь, лук, капуста белокочанная, бульон костный, свинина, томатная
                        паста
                    </p>
                    <h5><span></span>Салат "Вкусненький"</h5>
                    <p>
                        свекла, картофель, морковь, лук, капуста белокочанная, бульон костный, свинина, томатная
                        паста
                    </p>
                    <h5><span></span>Салат "Вкусненький"</h5>
                    <p>
                        свекла, картофель, морковь, лук, капуста белокочанная, бульон костный, свинина, томатная
                        паста
                    </p>

                </div>
                <div class="complex-low">
                    <p>Количество <input type="number" value="1" class="num"></p>
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
                    <a class="link-2" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Написать
                        отзыв</a>
                </div>
                <button class="own_btn buy">Купить</button>
            </div>

        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        var im = $('.comp-active').attr('src');
        $('.img-product').css('background-image', 'url(' + im + ')');

        $('.complex-slides>li>img').on('click', function () {
            var item = $(this);
            var img_src = item.attr('src');
            $('.img-product').css('background-image', 'url(' + img_src + ')');
        });

        $('.complex h5').on('click', function () {
            $this = $(this);
            $this.next().slideToggle('slow').siblings("h5 + p:visible").slideUp('slow');
            $this.toggleClass("active");
            $this.siblings("h5").removeClass("active");
        })
    });
</script>
</div>
<?php include 'footer.php'; ?>
