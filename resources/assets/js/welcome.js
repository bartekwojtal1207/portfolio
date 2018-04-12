$(function () {

var showText = function (target, message, index, interval) {
    if (index < message.length) {
        $(target).append(message[index++]);
        setTimeout(function () { showText(target, message, index, interval); }, interval);
    }
};

var textToAnimate = 'Bartosz Wojtal::develepor'

setTimeout(function () {
    showText("#msg", textToAnimate, 0, 1500);
},3000);


var mainWelcomeBtn = $('.welcome-button'),
    elementToAnimate = $('.js-show-text');

mainWelcomeBtn.mouseenter(function () {
    elementToAnimate.addClass('js-show-text-hover')
});
mainWelcomeBtn.mouseleave(function () {
    elementToAnimate.removeClass('js-show-text-hover')
});





});