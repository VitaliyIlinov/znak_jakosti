<?php include 'header.php'; ?>
    <div class="container">
        <h2 style="margin: 45px 0">Корзина покупок(0грн)</h2>
        <table class="table-basket">

            <thead>
            <tr>
                <td>Блюдо</td>
                <td>Количество</td>
                <td>Всего за шт.</td>
                <td>Всего</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><img src="images/gallery/photo1.jpg"><span>Комплекс №1</span></td>
                <td><input type="number" value="1"><span class="refresh-basket"></span><span
                        class="close-basket"></span></td>
                <td>50 грн</td>
                <td>50 грн</td>
            </tr>
            <tr>
                <td><img src="images/gallery/photo1.jpg"><span>Комплекс №1</span></td>
                <td><input type="number" value="1"><span class="refresh-basket"></span><span
                        class="close-basket"></span></td>
                <td>50 грн</td>
                <td>50 грн</td>
            </tr>
            </tbody>
        </table>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-6 marg-bottom">
                <div class="table-bfooter">
                    <p>Сума: <span id="table-sum">100 грн</span></p>
                    <p>Итог: <span id="table-sumall">100 грн</span></p>
                </div>
            </div>
            <div class="col-sm-6">
                <a class="arrow-down-t" href="/"></a>продолжить покупки</a>
            </div>
            <div class="col-sm-4 col-sm-offset-1">
                <button type="submit" class="own_btn" style="border-radius: 30px;padding: 10px 15px">Оформить заказ</button>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>