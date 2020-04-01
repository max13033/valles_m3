$().ready(function() {


    $('.service__title').on('click', (ev) => {
        $(ev.currentTarget).toggleClass('service__title--active');
    });

    $('.popup__title').on('click', (ev) => {
        $(ev.currentTarget).toggleClass('popup__title--active');
    });

    $('.icon-B').on('click', (ev) => {
        $('.popup').toggleClass('popup-active');
        $('.icon-B').toggleClass('icon-B-active');
        $('.b-mobile--icons').each(function() {
            $(this).attr('src', $(this).data('src'))
        });
    });

    let header = $('.header-menu');


    $(window).scroll(function() {
        if ($(this).scrollTop() > 60) {
            header.fadeIn(1000).addClass('header-menu-active');

        } else {
            header.removeClass('header-menu-active');
        }
        if ($(this).scrollTop() > 400) {

            $('.btntop').addClass('btntop-active');
        } else {
            $('.btntop').removeClass('btntop-active');
        }


    })


    $(window).on('scroll', function() {
        $('.phone').addClass('phone-active');
    })

    $(function() {
        var timer = null;

        $(window).on('scroll', function() {
            clearTimeout(timer);

            timer = setTimeout(function() {
                $('.phone').removeClass('phone-active');
            }, 1000);
        });
    })

    $(document).on('click', '.bx-auth-serv-icons>a', function() {
        $('#exampleModal').modal('hide')
    })

    $(function() {
        var $menu = $('.b-main-menu-mobile')
        $menu.find('ul').hide()
        $menu.find('li>a').each(function() {
            var $link = $(this)
            var $submenu = $(this).siblings('ul')
            if (!$submenu.length) {
                $link.toggleClass('b-mobile-menu__item-open b-mobile-menu__item-link')
            }
        })
        $menu.find('li>a').click(function(event) {
            var $submenu = $(this).siblings('ul')
            if ($submenu.length) {
                event.preventDefault()
                $submenu.slideToggle()
            }
        })
    })

    var swiper1 = new Swiper('.s1', { // Optional parameters
        direction: 'horizontal',
        loop: false,
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    })
    var swiper2 = new Swiper('.s2', { // Optional parameters
        direction: 'horizontal',
        loop: false,
        width: 106,
        runCallbacksOnInit: false

    })
    var swiper3 = new Swiper('.s3', {
        direction: 'horizontal',
        loop: false,
        width: 222,
    })
    var swiper4 = new Swiper('.s4', {
        direction: 'horizontal',
        loop: false,
        width: 350,
    })
    var swiper5 = new Swiper('.s5', {
        direction: 'horizontal',
        loop: false,
    })
    var swiper6 = new Swiper('.s6', {
        direction: 'horizontal',
        loop: false,
        width: 230,
    })
    window.onscroll = function() {
        var scrolled = window.pageYOffset || document.documentElement.scrollTop;
        if (scrolled >= 80) {
            document.querySelector(".topdesk").style.display = 'none';
            //document.querySelector(".phone").style.display = 'none';
        }
    }
    let scrolled;
    let timer;
    let btn = document.querySelector('.btntop');
    btn.onclick = function() {
        scrolled = window.pageYOffset;
        scrollTop();
    }

    function scrollTop() {
        if (scrolled > 0) {
            window.scrollTo(0, scrolled);
            scrolled -= 200; //Speed scroll
            timer = setTimeout(scrollTop, 30);
        } else {
            clearTimeout(scrollTop);
            window.scrollTo(0, 0);
            document.querySelector(".topdesk").style.display = 'block';
        }
    }

    let phone = document.querySelector('.phone');
    let table = document.querySelector('.phone__window');
    let ppp = document.querySelector('.popup');
    let burger = document.querySelector('.icon-B')

    burger.onclick = function() {
        document.querySelector(".topdesk").style.display = 'none';
    }

    phone.onclick = function() {
        table.classList.add('phone__window--active');
    }

    document.addEventListener('click', function(event) {
        var isClickInside = phone.contains(event.target) || event.target === table;
        var isClickInside2 = burger.contains(event.target) || event.target === ppp || ppp.contains(event.target);
        //console.log(isClickInside2);
        if (!isClickInside) {
            table.classList.remove('phone__window--active');
        }
        if (!isClickInside2) {
            ppp.classList.remove('popup-active');
            burger.classList.remove('icon-B-active');
        }
    });
})
