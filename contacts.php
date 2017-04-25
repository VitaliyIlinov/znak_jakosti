<?php include 'header.php'; ?>
    <div class="content">
        <div>
            <iframe style="min-width: 100%;max-width: 100%"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.7284247792045!2d30.513237316064757!3d50.44615897947475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce5791674ff5%3A0xf04c07850e2acf98!2z0JfQvtC70L7RgtGL0LUg0LLQvtGA0L7RgtCw!5e0!3m2!1sru!2sua!4v1478189406976"
                    height="265" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="h1-header">Контакты</h1>
                </div>
                <div class="col-sm-4 col-xs-12 text-center">
                    <div class="circle yellow ico-adress"></div>
                    <h3>Контакты:</h3>
                    <p>ул. Братиславская, 5г. Киев, Украина</p>
                </div>
                <div class="col-sm-4 col-xs-12  text-center">
                    <div class="circle yellow ico-tel"></div>
                    <h3>Телефон:</h3>
                    <p>ул. Братиславская, 5г. Киев, Украина</p>
                </div>
                <div class="col-sm-4 col-xs-12  text-center">
                    <div class="circle yellow ico-email"></div>
                    <h3>E-mail:</h3>
                    <p>ул. Братиславская, 5г. Киев, Украина</p>
                </div>
            </div>
        </div>

        <div class="contact-bg">
            <div class="border-circle "></div>
            <div class="container">
                <form class="contact" method="post" action="">
                    <div class="col-sm-12">
                        <h1 class="h1-header">Написать нам</h1>
                    </div>
                    <div class="col-sm-4 col-xs-12 form-group text-center">
                        <input class="contact-input" type="text" name="name" placeholder="Имя">
                    </div>
                    <div class="col-sm-4 col-xs-12  text-center">
                        <input class="contact-input" type="email" name="email" placeholder="E-mail">
                    </div>
                    <div class="col-sm-4 col-xs-12  text-center">
                        <input class="contact-input" type="text" name="phone" placeholder="Телефон">
                    </div>
                    <div class="col-sm-12 col-xs-12  text-center">
                        <textarea name="comment" class="form-control" rows="7" placeholder="Текст"></textarea>
                    </div>
                    <div class="col-sm-12 col-xs-12  text-center">
                        <button type="submit" class="own_btn">Отправить</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>