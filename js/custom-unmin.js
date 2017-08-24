// JavaScript Document
(function ($) {
	'use strict';
	$.fn.padHeight = function () {
		var base = this[0];
		var hHeight = $('.banner-video').outerHeight();
		var bHeight = $(base).outerHeight();
		var pad = (hHeight - bHeight) / 2;
		$(base).css('margin-top', pad + 'px');
        console.log(hHeight); 
	};
}(jQuery));