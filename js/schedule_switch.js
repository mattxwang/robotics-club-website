/*
$(window).scroll(function() {
    if ($(".navbar").offset().top > 70) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
}); */
//Saving elements as vars
var janStyle = document.querySelector("#January");
var febStyle = document.querySelector("#Febuary");
var marStyle = document.querySelector("#March");
var aprStyle = document.querySelector("#April");
var mayStyle = document.querySelector("#May");


// dw about this
//janStyle.Style.addClass = " ";
//Adding hidden class
febStyle.Style.addClass = "hidden";
marStyle.Style.addClass = "hidden";
aprStyle.Style.addClass = "hidden";
mayStyle.Style.addClass = "hidden";

function viewJan(){
	janStyle.Style.removeClass = "hidden";
	febStyle.Style.addClass = "hidden";
	marStyle.Style.addClass = "hidden";
	aprStyle.Style.addClass = "hidden";
	mayStyle.Style.addClass = "hidden";
}

function viewFeb(){
	janStyle.Style.addClass = "hidden";
	febStyle.Style.removeClass = "hidden";
	marStyle.Style.addClass = "hidden";
	aprStyle.Style.addClass = "hidden";
	mayStyle.Style.addClass = "hidden";	
}

function viewMar(){
	janStyle.Style.addClass = "hidden";
	febStyle.Style.addClass = "hidden";
	marStyle.Style.removeClass = "hidden";
	aprStyle.Style.addClass = "hidden";
	mayStyle.Style.addClass = "hidden";
}

function viewApr(){
	janStyle.Style.addClass = "hidden";
	febStyle.Style.addClass = "hidden";
	marStyle.Style.addClass = "hidden";
	aprStyle.Style.removeClass = "hidden";
	mayStyle.Style.addClass = "hidden";	
}

function viewMay(){
	janStyle.Style.addClass = "hidden";
	febStyle.Style.addClass = "hidden";
	marStyle.Style.addClass = "hidden";
	aprStyle.Style.addClass = "hidden";
	mayStyle.Style.removeClass = "hidden";
}

