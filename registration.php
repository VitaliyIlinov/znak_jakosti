<?php include 'header.php'; ?>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12"><h1 class="h1-header">Регистрация</h1>

                    <form action="/" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="col-sm-12">
                            <p>Если Вы уже зарегистрированы, перейдите на страницу
                                <a href="/auth.php" class="agree">авторизации</a>.</p>
                            <h4>Основные данные</h4>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="firstname" value="" placeholder="Имя"
                                   class="contact-input">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="lastname" value="" placeholder="Фамилия"
                                   class="contact-input">
                        </div>
                        <div class="col-sm-6">
                            <input type="email" name="email" value="" placeholder="E-Mail"
                                   class="contact-input">
                        </div>
                        <div class="col-sm-6">
                            <input type="tel" name="telephone" value="" placeholder="Телефон"
                                   class="contact-input">
                        </div>
                        <div class="col-sm-12">
                            <h4>Где вы работаете?</h4>
                        </div>
                        <div class="col-sm-12">
                            <input type="text" name="company" value="" placeholder="Компания"
                                   class="contact-input">
                        </div>
                        <div class="col-sm-12">
                            <h4>Ваш пароль</h4>
                        </div>
                        <div class="col-sm-6">
                            <input type="password" name="password" value="" placeholder="Пароль" class="contact-input">
                        </div>
                        <div class="col-sm-6">
                            <input type="password" name="confirm" value="" placeholder="Подтверждение пароля"
                                   class="contact-input">
                        </div>
                        <div class="col-sm-12">
                            <h4>Рассылка на новости</h4>
                        </div>
                        <div class="col-sm-12 marg-bottom">
                            <input type="radio" class="radio" id="radio-1" name="newsletter">
                            <label for="radio-1">Да</label>
                            <input type="radio" class="radio" id="radio-2" name="newsletter" checked>
                            <label for="radio-2">Нет</label>
                        </div>
                        <div class="col-sm-8 checkbox">
                            <br>
                            <input id="agree" type="checkbox" name="agree" value="1">
                            <label for="agree">Я прочитал <a href="#" class="agree">
                                    <b>Privacy Policy</b></a> и согласен с условиями
                            </label>
                        </div>
                        <br>
                        <div class="col-sm-4 col-xs-12 text-align-right">
                            <input type="submit" value="Продолжить" class="own_btn" style="border-radius: 50px">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>