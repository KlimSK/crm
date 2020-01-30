$(document).ready(function () {

    mainMenuHeight();
    mainTableHeight();
    $(window).on('resize', mainTableHeight());
    sidebarMenuControls();
    headerDefinitions();
    statusScroll();
    tableDefinitions();
    orderModalSendCalendar($('#order-modal-send'));
    orderModalSendCalendar($('#notification-date'));
    modalDefinitions();
});


function sidebarMenuControls() {
    $('.main-menu>ul.menu-list>li>span').click(function () {

        var elem = $(this).parent();


        if (elem.find('>ul').css('height') == '0px' && !elem.hasClass('no-submenu')) {


            $('.main-menu ul>li.active>ul').animate({height: '0'}, 400);
            $('.main-menu ul>li.active').removeClass('active');
            elem.addClass('active');
            elem.find('>ul').css('height', 'auto');

            console.log(elem.position().top);
            elem.find('>ul').css('top', elem.position().top);
            var autoHeight = elem.find('>ul').css('height');
            elem.find('>ul').css('height', '0').animate({height: autoHeight}, 400);
        }

        if ($('aside').hasClass('min-menu') && elem.find('>ul').css('height') != '0px') {
            $('.main-menu ul>li.active>ul').animate({height: '0'}, 400);
        }
    });

    $('#burger .navBurger').click(function () {

        //если сайдбар свёрнут
        if ($(this).hasClass('active')) {

            var el = $(this);

            $(this).removeClass('active');

            $('aside').animate({width: '200px'}, 400);
            $('aside .header-logo .home-link').fadeIn();
            $('aside').removeClass('min-menu');
            $('.main-menu ul>li.active>ul').css('height', '0');

            setTimeout(function () {
                $('.main-menu ul>li.active>ul').css('height', 'auto');
                var autoHeight = $('.main-menu ul>li.active>ul').css('height');
                $('.main-menu ul>li.active>ul').css('height', '0').animate({height: autoHeight}, 400);

            }, 400);


        }
        // если сайдбар развёрнут
        else {

            var el = $(this);

            $('.main-menu ul>li.active>ul').animate({height: '0'}, 400);


            //
            if ($('.main-menu ul>li.active>ul').length) {
                setTimeout(function () {
                    el.addClass('active');
                    $('aside').addClass('min-menu');
                    $('aside').animate({width: '50px'}, 400);
                    $('aside .header-logo .home-link').fadeOut();
                }, 400);
            }
            else {
                el.addClass('active');
                $('aside').addClass('min-menu');
                $('aside').animate({width: '50px'}, 400);
                $('aside .header-logo .home-link').fadeOut();
            }


        }
    });
}

function headerDefinitions() {

    //tariff info popup

    $('header .header-tariff .tariff-popup-info').popup({
        variation: 'small inverted'
    });

    $('header .header-controls .control-block a').popup({
        variation: 'mini'
    });

    $('.content-section .content-controls .refresh-button').popup({
        variation: 'mini'
    });

    $('header .header-controls .user-controls').popup({
        variation: 'mini',
        on: 'click'
    });



    $('.ui.dropdown').each(function () {
        $(this).dropdown({
            fullTextSearch: true,
        });
    });
}

function modalDefinitions() {
    /*$('.modal-about-site.modal')
        .modal('attach events', '#about-site', 'show');

    $('.modal-tariffs.modal')
        .modal('attach events', '#all-tariffs', 'show');

    $('.modal-contacts.modal')
        .modal('attach events', '#header-contacts', 'show');*/

    $('[data-modal-target]').click(function () {
        $('#' + $(this).attr('data-modal-target')).modal('show');
    });
}


function tableDefinitions() {

    $('.order-products').each(function () {
        $(this).find('.products-counter').popup({
            popup: $(this).find('.ui.popup'),
            variation: 'tiny inverted',
            position: 'bottom center'
        });
    });


    initSemanticCalendar($('#send-from'), $('#send-to'));
    initSemanticCalendar($('#added-from'), $('#added-to'));
    initSemanticCalendar($('#updated-from'), $('#updated-to'));
    initSemanticCalendar($('#passed-from'), $('#passed-to'));

    tableRowClick();
    orderModal();
    productModal();
}

//Модальное окно заказа
function orderModal() {
    $('.main-table.orders-table tbody tr').dblclick(function () {
        $('.modal-order.modal')
            .modal({})
            .modal('show');
    });

    var secondaryModal = $('.secondary-modal');


    $('.open-secondary-modal').click(function () {
        var id = $(this).attr('data-modal-target');
        $('#' + id)
            .modal({

                allowMultiple: true,
                closable: true,
                centered: true,
                onShow: function () {
                    $('.modal-order').dimmer('show');
                },
                onHide: function () {
                    $('.modal-order').dimmer('hide');
                }
            })
            .modal('show');
    });

    closeModalByDimmer(secondaryModal);
}

//Модальное окно товара
function productModal() {
    $('.main-table.products-table tbody tr').dblclick(function () {
        $('.modal-product.modal')
            .modal({})
            .modal('show');
    });
}


//Закрыть модальное окно
function closeModalByDimmer(modal) {

    $(document).mouseup(function (e) {
        var container = modal;

        var alert = $('.ui-alert-content');

        // if the target of the click isn't the container nor a descendant of the container
        if (!container.is(e.target) && container.has(e.target).length === 0
            && !alert.is(e.target) && alert.has(e.target).length === 0) {
            modal.modal('hide');
        }
    });
}

//Клик на строку в таблице
function tableRowClick() {
    $('.main-table tbody tr').click(function (e) {


        if (e.shiftKey) {
            var start = $('.main-table tbody tr.active-row').eq(0);
            var end = $(this);

            $('.main-table tbody tr.active-row').removeClass('active-row');

            start.addClass('active-row');
            end.addClass('active-row');

            var direction = end.index() > start.index() ? 'forward' : 'back';

            console.log(start.index());
            console.log(end.index());

            if (direction === 'forward') {
                start.nextUntil(end).addClass('active-row');
            }
            else {
                end.nextUntil(start).addClass('active-row');
            }
        }
        else if (e.ctrlKey) {
            if (!$(this).hasClass('active-row')) {
                $(this).addClass('active-row');
            }
            else {
                $(this).removeClass('active-row');
            }
        }

        else {
            if (!$(this).hasClass('active-row')) {
                $('.main-table tbody tr.active-row').removeClass('active-row');
                $(this).addClass('active-row');
            }
            else {
                if ($('.main-table tbody tr.active-row').length > 1) {
                    $('.main-table tbody tr.active-row').removeClass('active-row');
                    $(this).addClass('active-row');
                }

                else {
                    $(this).removeClass('active-row');
                }

            }
        }

        var selected = $('.main-table tbody tr.active-row').length;

        if (selected) {
            $('.selected-blocks').css('opacity', '1');
            $('.selected-blocks .detail').text(selected);
        }
        else {
            $('.selected-blocks').css('opacity', '0');
        }
    });
}


//Скрипт скролла статусов на странице заказов
function statusScroll() {
    $('#tabs-panel-statusy .tabs-arrow').click(function () {
        var tabs = $(this).siblings('#ul-statusy');
        var leftPos = tabs.scrollLeft();

        if ($(this).attr('id') === 'button-arrow-left-tabs') {
            tabs.animate({
                scrollLeft: leftPos - 250
            }, 300)
        }
        else if ($(this).attr('id') === 'button-arrow-right-tabs') {
            tabs.animate({
                scrollLeft: leftPos + 250
            }, 300)
        }
    });
}

function initSemanticCalendar(start, end) {
    start.calendar({
        type: 'date',
        endCalendar: end,
        monthFirst: false,
        firstDayOfWeek: 1,
        ampm: false,
        text: {
            days: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
            months: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            monthsShort: ['Янв', 'Фев', 'Март', 'Апр', 'Май', 'Июнь', 'Июль', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
            today: 'Сегодня',
            now: 'Сейчас',
            am: 'AM',
            pm: 'PM'
        },
        formatter: {
            date: function (date, settings) {
                if (!date) return '';
                var day = date.getDate();
                var month = date.getMonth() + 1;
                var year = date.getFullYear();
                return day + '/' + month + '/' + year;
            }
        },
        popupOptions: {
            position: 'bottom left'
        }
    });
    end.calendar({
        type: 'date',
        startCalendar: start,
        monthFirst: false,
        ampm: false,
        text: {
            days: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
            months: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            monthsShort: ['Янв', 'Фев', 'Март', 'Апр', 'Май', 'Июнь', 'Июль', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
            today: 'Сегодня',
            now: 'Сейчас',
            am: 'AM',
            pm: 'PM'
        },
        formatter: {
            date: function (date, settings) {
                if (!date) return '';
                var day = date.getDate();
                var month = date.getMonth() + 1;
                var year = date.getFullYear();
                return day + '/' + month + '/' + year;
            }
        },
        popupOptions: {
            position: 'bottom left'
        }
    });
}

function orderModalSendCalendar(modal) {
    modal.calendar({
        type: 'datetime',
        monthFirst: false,
        ampm: false,
        text: {
            days: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
            months: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            monthsShort: ['Янв', 'Фев', 'Март', 'Апр', 'Май', 'Июнь', 'Июль', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
            today: 'Сегодня',
            now: 'Сейчас',
            am: 'AM',
            pm: 'PM'
        },
        firstDayOfWeek: 1,
        formatter: {
            date: function (date, settings) {
                if (!date) return '';
                var day = date.getDate();
                var month = date.getMonth() + 1;
                var year = date.getFullYear();
                return day + '/' + month + '/' + year;
            }
        },
        popupOptions: {
            position: 'bottom left'
        }
    });
}

//Автовысота таблицы
function mainTableHeight() {

    var table = $('.main-table');
    if (table.length) {

        var sum = 0;

        table.siblings().each(function () {
            sum += parseFloat($(this).outerHeight());
        });

        $('.main-table').css('height', 'calc(100vh - ' + sum + 'px - 10px)');
    }
}

//Автовысота меню
function mainMenuHeight() {
    var nav = $('aside nav.main-menu');

    var logo = $('.header-logo').height();

    nav.css('max-height', 'calc(100vh - ' + logo + 'px)');
}


function alertMessage(type, head, text, time) {
    var bgColor = '#55a9ee';
    var alertIcon = 'info circle';
    if (type == "danger") {
        bgColor = "#DB2828";
        alertIcon = 'times box';
    }
    else if (type == "warning") {
        bgColor = "#F2711C";
        alertIcon = 'warning sign icon';
    }

    else if (type == "success") {
        bgColor = "#21ba45";
        alertIcon = 'checkmark box';
    }
    else if(type == "info"){
        bgColor = "#55a9ee";
        alertIcon = 'info circle';
    }


    if (type && head && text) {
        $.uiAlert({
            textHead: head, // header
            text: text, // Text
            bgcolor: bgColor, // background-color
            textcolor: '#fff', // color
            position: 'top-right',// position . top And bottom ||  left / center / right
            icon: alertIcon, // icon in semantic-UI
            time: time ? time : 5 // time
        });
    }
}