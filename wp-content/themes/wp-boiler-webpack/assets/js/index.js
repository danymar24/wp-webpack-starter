//import 'jquery';
require ('../scss/style.scss');
require ('bootstrap');

$(document).ready(function() {
    $('.carousel').find('.carousel-item').first().addClass('active');
})