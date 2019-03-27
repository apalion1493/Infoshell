$(function() {
    $(".infoshel-header__container-burger").click(function() {
        $(".side-menu").toggleClass("active");
        $(".infoshel-page").toggleClass("active");
    });

    $(".side-menu__header-close").click(function() {
        $(".side-menu").removeClass("active");
        $(".infoshel-page").removeClass("active");
    });

    $(".infoshel-main-calculator__platform").click(function() {
        $(this).toggleClass("active");
    });
});


var foo = jQuery('.infoshel-main-slider__img-six');

foo.detach(); //удаляем элемент

$(document).ready(function(){
    $('.infoshel-header__container-requestCall').hover(
        function() {
            $( this ).addClass('class-name1');
            $( this ).removeClass('class-name2');
        }, function() {
            $( this ).removeClass('class-name1');
            $( this ).addClass('class-name2');
        }
    );
});