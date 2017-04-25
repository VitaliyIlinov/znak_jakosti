<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Знак Якости</title>


    <!-- Bootstrap -->
    <link href="/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/libs/bootstrap/datepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" href="libs/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="libs/css/style.css" rel="stylesheet">
    <link href="libs/css/media.css" rel="stylesheet">


    <!-- Date picker-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="libs/js/jquery-3.1.1.min.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="libs/js/main.js"></script>
    <!--&lt;!&ndash; Include all compiled plugins (below), or include individual files as needed &ndash;&gt;-->
    <script src="libs/bootstrap/datepicker/js/moment-with-locales.min.js"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="libs/bootstrap/datepicker/js/bootstrap-datetimepicker.min.js"></script>
</head>
<body>
<header>
    <div class="nav clearfix">
        <div class="container">
            <button type="button" id="menu-open" class="btn-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <nav>
                <ul class="menu-right">
                    <li><a data-toggle="dropdown" href="#"><span class="hide-400 hidden-sm">Личный кабинет</span><span
                                class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/registration.php">Регистрация</a></li>
                            <li><a href="/auth.php">Авторизация</a></li>
                            <li><a href="/profile.php">Профиль</a></li>
                        </ul>
                    </li>
                    <!--                    <li><a href="/basket.php"><span class="hidden-sm hide-400">Корзина</span></a></li>-->
                </ul>
                <ul class="menu-left">
                    <li><a href="/company.php">О компании</a></li>
                    <li><a href="/news.php">Новости</a></li>
                    <li><a href="#">Оформление заказа</a></li>
                    <li><a href="#">Доставка и оплата</a></li>
                    <li><a href="/contacts.php">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="bor-circle"></div>
    <div class="container header-logo">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-9 ">
                <a href="/"><img src="images/ico/logo_new.png" class="img-responsive"></a>
            </div>
            <div class="margin-top-40 text-align-right col-lg-3 col-md-4 col-sm-5 col-xs-3 col-lg-push-4 col-md-push-2 col-sm-push-2  ">
                <div class="tel hidden-xs"><span class="cod-tel">+38 044</span> <span>456 7890&nbsp;</span></div>
                <a class="circle yellow ico-tel" href="#"></a>
            </div>
            <div class="margin-top-40 col-lg-offset-2 col-lg-1 col-md-1 col-sm-1 col-xs-4 col-lg-pull-3 col-md-pull-4 col-sm-pull-5">
                <a class="circle lightgrey search" href="#"> </a>
            </div>
            <div class="margin-top-40 text-center col-lg-1 col-md-1 col-sm-1 col-xs-4 col-lg-pull-3 col-md-pull-4 col-sm-pull-5">
                <a class="circle lightgrey fb" href="https://www.facebook.com"> </a>
            </div>
            <div class="margin-top-40 text-align-right col-lg-2 col-md-2 col-sm-1 col-xs-4 ">
                <div class="hidden-sm hidden-xs pr-quantity">Товаров <span id="product-quantity">1</span><br><span
                        class="table-sumall">100 грн</span></div>
                <div id="basket" href="#" class="circle lightgrey basket ">
                    <div class="basket-hover">
                        <table class="table-hover">
                            <tbody>
                            <tr>
                                <td><img class="img-responsive" src="images/gallery/photo1.jpg"></td>
                                <td>Комплекс №1</td>
                                <td>x1</td>
                                <td>50 грн</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td class="text-left">Сумма</td>
                                <td colspan="3">50 грн</td>
                            </tr>
                            <tr>
                                <td class="text-left">Итого</td>
                                <td colspan="3">50 грн</td>
                            </tr>
                            </tfoot>
                        </table>
                        <div class=""><a class="own_btn buy" href="/basket.php">В КОРЗИНУ</a></div>
                        <div class=""><a class="own_btn" href="#">ОФОРМИТЬ ЗАКАЗ</a></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php include 'slider.php'; ?>
</header>