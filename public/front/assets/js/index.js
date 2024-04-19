var swiper = new Swiper('.blog-slider', {
    spaceBetween: 30,
    lazy: true,
    slidesPerView: 1,
    direction: "vertical",
    effect: 'fade',
    loop: true,
    centeredSlides: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },

    pagination: {
        el: '.blog-slider__pagination',
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
    }
});

var swiper = new Swiper(".mySwiper1", {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        "@0.00": {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        "@0.50": {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        "@0.75": {
            slidesPerView: 3,
            spaceBetween: 40,
        },
        "@1.00": {
            slidesPerView: 4,
            spaceBetween: 50,
        },
        "@1.50": {
            slidesPerView: 5,
            spaceBetween: 70,
        },

    },
});

var swiper = new Swiper(".mySwiper", {
    effect: "flip",
    lazy: true,
    grabCursor: true,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

$(document).ready(function () {
    $('[data-toggle="popover"]').popover({
        placement: 'bottom',
        html: true,
        template: '<div class="popover" role="tooltip">' +
            '<div class="arrow"></div>' +
            '<h3 class="popover-header"></h3>' +
            '<div class="popover-body"></div>' +
            '</div>'
    }).on('hide.bs.popover', function () {
        if ($(".popover:hover").length) {
            return false;
        }
    });
    $('body').on('click', function (e) {
        $('[data-toggle=popover]').each(function () {
            if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                $(this).popover('hide');
            }
        });
    });
});
