//toggleメニュー作るよ

$(document).ready(function($){
    if(window.matchMedia).toggleClass('on');
    $(this).siblings().slideToggle();
});







$('.js-toggle').on('click',function(){
    $(this).toggleClass('on');
    $(this).siblings().slideToggle();
});