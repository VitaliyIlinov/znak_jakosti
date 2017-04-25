function updateTableSum() {
    summAll = null;
    $('.table-basket> tbody> tr>td:last-child').html(function (index, val) {
        summAll += parseInt(val);
    });
    $('.table-sumall').html(summAll + ' грн');
}
var productQuantity = function () {
    var tablebasket = $('.table-basket tr').length;
    if (tablebasket) {
        return $('.table-basket').length + 1;
    } else {
        $('.table-sumall').html('100 грн');
        return '1';
    }
};

$(document).ready(function () {
    updateTableSum();
    $('#product-quantity').html(productQuantity);
    $('.table-basket input[type=number]').on('change', function () {
        $this = $(this);
        var quatity = parseInt($this.val()),
            allTd = $this.closest('tr').children(),
            price = parseInt(allTd.eq(2).html()),
            summ = quatity * price;
        allTd.eq(3).html(summ + ' грн');
        updateTableSum();
    });
    $('.table-basket .close-basket').on('click', function () {
        $(this).closest('tr').remove();
        updateTableSum();
    });


    $('#ajax-load-news').on('click', function (e) {
        e.preventDefault();
        var prev = $(this).parent().prevUntil('.row');
        var copy = prev.clone();
        prev.after(copy);
    });


    $('#menu-open').click(function () {
        $('.menu-left').slideToggle("slow")
    });
    $(window).resize(function () {
        var wid = $(window).width();
        if (wid >= 760 && $('.menu-left').is(':hidden')) {
            $('.menu-left').removeAttr('style');
        }
        if (wid > 760 && $('footer h5+ul').is(':hidden')) {
            $('footer h5+ul').removeAttr('style');
        }
    });


    $('footer h5').on('click', function () {
        var wid = $(window).width();
        if (wid <= 760) {
            $(this).next().slideToggle(500);
        }
    });


    $('.menu>li>a').on('click', function (e) {
        $this = $(this);
        // alert($this.next().length);
        // if ($this.attr('href').length > 1) {
        // if ($this.next().length > 0) {
        if ($this.next().length > 0) {
            $this.addClass('active');
            $this.next().slideToggle('slow');
            // e.preventDefault();
            if ($this.attr('href').length < 2) {
                e.preventDefault();
            }
        }
    });

    $('.menu a').each(function () {    // проходим по нужным нам ссылками
        var location = window.location.href; // получаем адрес страницы
        var link = this.href;                // получаем адрес ссылки
        if (location == link) {               // при совпадении адреса ссылки и адреса окна
            $(this).addClass('active');    // добавляем класс
            if ($(this).next().length > 0) {
                $(this).next().addClass('opened').show();
            }

            var height = null;
            var insert=$('.main-menu');
            var classmenu='menu-date';
            var t = $(this).parentsUntil('.menu');// все родители до класса 'menu'

            if(t.length==1){      //without submenu
                // alert('center');
            }
            t.each(function (index, element) {
                if ($(element).hasClass('submenu')) {
                    $(element).prev().addClass('active');
                    $(element).addClass('opened').show();
                }
                if ($(element).hasClass('first opened') && $(element).find('.active').next().length > 0) {
                    // alert('right');
                    classmenu='menu-date-right';
                }
                else if ($(element).hasClass('first opened')) {
                    // console.log($(element));
                }
            });
            $('.first.opened').each(function (indx, element) {
                height += $(element).height();
            });

            var html='<ul class="'+ classmenu +' clearfix">';
            html +='<li>';
            html +='<label for="datetimepicker"></label>';
            html +='<input type="text" id="datetimepicker" placeholder="Выберите дату заказа"/>';
            html +='</li>';
            html +='<li>';
            html +='<button id="days">Выберите дни</button>';
            html +='</li>';
            html +='</ul>';
            insert.after(html);

            $('.'+ classmenu).css('margin-top', (height + 40) + 'px');
        }
    });


});