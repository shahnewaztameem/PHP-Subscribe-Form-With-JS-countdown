"use strict";
//release date
const releaseDate = new Date('Dec 30, 2020 00:00:00');
let countdownSelector = document.querySelector("#countdown");
let counterNumber = document.getElementsByClassName("counter-number");
let counterBox = document.getElementsByClassName("counter-box");
const value = 60 * 60 * 1000;
window.onload = interval;
//check for the interval
var interval = setInterval(interval, 1000);
function interval(){
	
	//get current time
	var currentDate = new Date().getTime();
	var duration = releaseDate - currentDate;
	var days 	= Math.floor(duration / (24 * value));
	var hours 	= Math.floor(duration % (24 * value) / (value));
	var mins 	= Math.floor(duration % (value) / (60 * 1000));
	var seconds = Math.floor(duration % (60 * 1000) /  1000);
	var arr = [days, hours, mins, seconds];
	for(var i = 0; i < counterNumber.length; i++){
		counterNumber[i].textContent = arr[i];
	}
	if(duration < 0){
		closeInterval();
		countdownSelector.style.color = "#76b328";
		countdownSelector.style.fontSize = "3em";
		countdownSelector.textContent = "Website will be launch soon!";
	}
	
}

//call in every 1 seconds


function closeInterval(){
	clearInterval(interval);
}