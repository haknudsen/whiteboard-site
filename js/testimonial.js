// JavaScript Document copyright 2016 by Website Talking Heads
$(document).ready(function () {
	"use strict";
	var quote = Array();
	var name = Array();
	var count = 0;
	$.ajax({
		url: "../js/testimonials.xml",
		dataType: "xml",
		success: parse,
		error: function () {
			alert("Error: Something went wrong");
		}
	});

	function parse(document) {
		var x = 0;
		$(document).find('content').each(function () {
			quote[x] = $(this).find('quote').text();
			name[x] = $(this).find('name').text();
			x++;
		});
		changeQuote();
	}

	function changeQuote() {
		setInterval(function(){
			$("#quoteBlock").fadeOut('slow', function(){
				$("#quoteBlock").text(quote[count]).delay(300).fadeIn();
			});
			$("#name").fadeOut('slow', function(){
				$("#name").text(name[count]).delay(600).fadeIn();
			});
			count++;
			if(count>quote.length){count=0;}
		},5000);
	}
	});
