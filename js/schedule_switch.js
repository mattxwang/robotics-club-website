/*
$(window).scroll(function() {
    if ($(".navbar").offset().top > 70) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
}); */
//Calendars
var JanCalendar = document.getElementById("January");
var FebCalendar = document.getElementById("Febuary");
var MarCalendar = document.getElementById("March");
var AprCalendar = document.getElementById("April");
var MayCalendar = document.getElementById("May");
//Buttons
var JanButton = document.getElementById("JanButton");
var FebButton = document.getElementById("FebButton");
var MarButton = document.getElementById("MarButton");
var AprButton = document.getElementById("AprButton");
var MayButton = document.getElementById("MayButton");

//Start with all but Jan hidden
FebCalendar.addClass("hidden");
MarCalendar.addClass("hidden");
AprCalendar.addClass("hidden");
MayCalendar.addClass("hidden");

function JanClicked(){
	JanCalendar.removeClass("hidden");
	FebCalendar.addClass("hidden");
	MarCalendar.addClass("hidden");
	AprCalendar.addClass("hidden");
	MayCalendar.addClass("hidden");
}

function FebClicked(){
	JanCalendar.addClass("hidden");
	FebCalendar.removeClass("hidden");
	MarCalendar.addClass("hidden");
	AprCalendar.addClass("hidden");
	MayCalendar.addClass("hidden");
}

function MarClicked(){
	JanCalendar.addClass("hidden");
	FebCalendar.addClass("hidden");
	MarCalendar.removeClass("hidden");
	AprCalendar.addClass("hidden");
	MayCalendar.addClass("hidden");
}

function AprClicked(){
	JanCalendar.addClass("hidden");
	FebCalendar.addClass("hidden");
	MarCalendar.addClass("hidden");
	AprCalendar.removeClass("hidden");
	MayCalendar.addClass("hidden");
}

function MayClicked(){
	JanCalendar.addClass("hidden");
	FebCalendar.addClass("hidden");
	MarCalendar.addClass("hidden");
	AprCalendar.addClass("hidden");
	MayCalendar.removeClass("hidden");
}

