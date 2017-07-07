
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

const $bono = $('#bonobono');
let interval;

function moveBono() {
    let rand = Math.random() * 90 + 5,
        pos = rand + 'vw';
    console.log(rand);
    $bono.animate({
        top: '+=100'
    }, 400, () => {
        $bono.css('right', pos);
        $bono.animate({
            top: '-=100'
        }, 800)
    });
}

function activateBono() {
    moveBono();
    interval = setInterval(() => {
        moveBono();
    }, 2500);
}

function clickBono() {
    if ($bono.hasClass('on')) {
        $bono.removeClass('on');
        clearInterval(interval);
        $bono.stop();
        $bono.animate({
            top: '7'
        }, 500, () => {
            $bono.find('.arrow-box').removeClass('hidden');
            $bono.addClass('off');
        });
    } else if ($bono.hasClass('off')) {
        $bono.removeClass('off');
        $bono.find('.arrow-box').addClass('hidden');
        activateBono();
        $bono.addClass('on');
    }
}

$(() => {
    activateBono();

    $bono.on('click', () => {
        clickBono();
    });
});