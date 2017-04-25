<?php include 'header.php'; ?>

<div class="container" style="margin-top: 30px;">
    <div class="row">
        <div class="col-sm-6">
            <div class="well">
                <h2>Регистрация</h2>
                <p>Создание учетной записи поможет покупать быстрее. Вы сможете контролировать состояние заказа,
                    а также просматривать заказы сделанные ранее. Вы сможете накапливать призовые баллы и
                    получать скидочные купоны. <br>А постоянным покупателям мы предлагаем гибкую систему скидок
                    и персональное обслуживание.<br></p>
                <a href="/registration.php" class="link_photo">Продолжить</a>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="well">
                <h2>Войти в Личный Кабинет</h2>
                <form action="/" method="post"
                      enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" name="email" value="" placeholder="E-Mail"
                               class="contact-input">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" value="" placeholder="Пароль"
                               class="contact-input">
                    </div>
                    <div class="row marg-bottom">
                        <div class="col-sm-6 col-xs-6">
                            <a href="/" class="agree">Забыли пароль?</a>
                        </div>
                        <div class="col-sm-6 col-xs-6 text-align-right">
                            <input type="submit" value="Войти" class="link_photo">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
