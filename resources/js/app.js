/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.jQuery = window.$ = require('jquery');
//window.axios = require('axios');

require('./caroufredsel-carousel');
require('./jquery-tweetscroll');

//document.getElementById('app').innerHTML = "gigu";

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const files = require.context('./components', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('fatada', require('./components/fatada.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

$(document).ready(function(){
    let status = true;
    let $servbool = true;
    let $btnServic = $('.servicii-lista a.btn-success'); 
    let $divServicii = $('.div-servicii');
    let $btnNavbar = $('button.navbar-toggler');
    let $carouselTitle = $('article h4');
    var $splash = $('.splash');

        setTimeout(()=>{ $("#macara-1").css({'background-image': 'url(/images/macara1.jpg)', 'background-position':'center'}, 300)})
        setTimeout(()=>{ $(".thumbnails").css({'background-image': 'url(/images/macara1.jpg)', 'background-position':'center'}, 300)})
        
        $('#submit-button').on('click', () => {
            $('.splash').css('display', 'none');
        });

        $(function() {
            setTimeout(()=> { 
                $splash.fadeOut(1000);
                $('section.page-body').css('visibility', 'visible');
            }, 2000);
        })

    let scroll = requestAnimationFrame || function(callback) {setInterval(callback, 1000/60)};
    $('.contactButton').on('click', () => {
        $('html, body').animate({
            scrollTop: $('#formularContact').offset().top - 250
        }, 300);
    })

    function executeScroll () {
        scroll(executeScroll);
        if ($(window).scrollTop() > 150 && status == true) {
                    $('nav a.navbar-brand').animate({'width': '220px'}, 300);
                    status = false;
                    $('.prezentare-mob').animate({'top' : '1000px', 'opacity': '0', 'visibility': 'hidden'}, 500);
                } else if ($(window).scrollTop() < 150 && status == false) {
                    $('nav a.navbar-brand').animate({'width': '200px'}, 300);
                    status = true;
                    $('.prezentare-mob').animate({'top' : '90px', 'opacity': '1', 'visibility': 'visible'}, 500);
                }

        if (isElementInViewPort($carouselTitle)) {
            // $carouselTitle.delay(200).attr('data-content',' ');
                $carouselTitle.addClass('skewedAnimation');
        } else {
                $carouselTitle.removeClass('skewedAnimation');
        }
    }

    executeScroll ();

    function isElementInViewPort(el) {
        if(el) {
            //console.log(el);
        if (typeof jQuery == 'function' && el instanceof jQuery) {
            el = el[0];
            }
        let rect = el.getBoundingClientRect();
        return ((rect.top <= 0 && rect.bottom >=0) || 
            (rect.top <= (window.innerHeight || document.documentElement.clientHeight) 
                && rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) ) ||
            (rect.top >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)));       
        }
    }

    
    
    // $(window).on('scroll', () => {
    //     if ($(window).scrollTop() > 60 && status == true) {
    //         $('nav a.navbar-brand').animate({'font-size': '160%'}, 300);
    //         status = false;
    //         $('.prezentare-mob').animate({'top' : '1000px', 'opacity': '0', 'visibility': 'hidden'}, 500);
    //     } else if ($(window).scrollTop() < 60 && status == false) {
    //         $('nav a.navbar-brand').animate({'font-size': '100%'}, 300);
    //         status = true;
    //         $('.prezentare-mob').animate({'top' : '1000px', 'opacity': '0', 'visibility': 'hvisible'}, 500);
    //     }
    // });
    $btnServic.each(function(i, el) {
         $(el).on('click', function(e){ 
                $('.servicii-general').not(':eq('+i+')').hide();
                if($('.servicii-general:visible').length > 0) {
                    $servbool = false;
                } else { $servbool = true; }
                if($servbool) { 
                    // $titluServic.removeClass('mb-4');
                    // $titluServic.slideUp(400); 
                    // $divServicii.not((i, e) => { i == 0 ? e.slideUp(400) : '' });
                    $divServicii.eq(0).slideUp(400);
                } else { 
                    // $titluServic.slideDown(700, () =>  $titluServic.addClass('mb-4')); 
                    $divServicii.eq(0).slideDown(400);
                }
                $('.servicii-general:eq('+i+')').slideToggle(400);
                e.preventDefault();
                let hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top - 100
                }, 400, function(){
                   // window.location.hash = hash;
                });    
            });
    });

    $btnNavbar.on('click', () => {
        $('ul.navbar-nav').slideToggle('fast');
    });

    $('div.thumbnail-title').each((i, e) => {
        $(e).hover(function() {
            $(this).next('span').slideDown(200).css({"display":"block","z-index": "1000"});
        })
        $(e).on('mouseleave', function() {
            $(this).next('span').slideUp(200);
        })
    });

    $("#foo3").carouFredSel({
        items: 1,
        direction: "up",
        scroll: {
            items: 1,
            pauseOnHover: true
        },
       // pagination  : "#foo3_pag"
        pagination: {
            anchorBuilder: function(nr) { 
                return "<a class='pag-link' href='#'><span>" + " Lucrare " + nr + " </span></a>"; 
            },
            container : "#foo3_pag"
        },
    });    
})



