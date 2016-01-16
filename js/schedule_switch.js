//MY FIRST JS FILE
//AND IT MIGHT WORK
//ER MA FERKEN GERD
/*
$(window).scroll(function() {
    if ($(".navbar").offset().top > 70) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
}); */
//Saving elements as vars
//Calendars
var janStyle = document.getElementById("#January");
var febStyle = document.getElementById("#Febuary");
var marStyle = document.getElementById("#March");
var aprStyle = document.getElementById("#April");
var mayStyle = document.getElementById("#May");
//Buttons
var JanButton = document.getElementById("#JanButton");
var FebButton = document.getElementById("#FebButton");
var MarButton = document.getElementById("#MarButton");
var AprButton = document.getElementById("#AprButton");
var MayButton = document.getElementById("#MayButton");

// dw about this
//janStyle.Style.addClass = " ";
//Adding hidden class
febStyle.Style.addClass = "hidden";
marStyle.Style.addClass = "hidden";
aprStyle.Style.addClass = "hidden";
mayStyle.Style.addClass = "hidden";

//These functions change which calendars are viewable
//for Jan
function viewJan(){
	janStyle.Style.removeClass = "hidden";
	febStyle.Style.addClass = "hidden";
	marStyle.Style.addClass = "hidden";
	aprStyle.Style.addClass = "hidden";
	mayStyle.Style.addClass = "hidden";
}
//for Feb
function viewFeb(){
	janStyle.Style.addClass = "hidden";
	febStyle.Style.removeClass = "hidden";
	marStyle.Style.addClass = "hidden";
	aprStyle.Style.addClass = "hidden";
	mayStyle.Style.addClass = "hidden";	
}
//For March
function viewMar(){
	janStyle.Style.addClass = "hidden";
	febStyle.Style.addClass = "hidden";
	marStyle.Style.removeClass = "hidden";
	aprStyle.Style.addClass = "hidden";
	mayStyle.Style.addClass = "hidden";
}
//For April
function viewApr(){
	janStyle.Style.addClass = "hidden";
	febStyle.Style.addClass = "hidden";
	marStyle.Style.addClass = "hidden";
	aprStyle.Style.removeClass = "hidden";
	mayStyle.Style.addClass = "hidden";	
}
//For May
function viewMay(){
	janStyle.Style.addClass = "hidden";
	febStyle.Style.addClass = "hidden";
	marStyle.Style.addClass = "hidden";
	aprStyle.Style.addClass = "hidden";
	mayStyle.Style.removeClass = "hidden";
}
//If statements
//if button is pressed, run function
//Shows jan
if (JanButton.onClick == true){
	viewJan();
}
//Shows feb
if (FebButton.onClick == true) {
	viewFeb();
}
//Shows mar
if (MarButton.onClick == true) {
	viewMar();
}
//Shows april
if (AprButton.onClick == true) {
	viewApr();
}
//shows may
if (MayButton.onClick == true) {
	viewMay();
}