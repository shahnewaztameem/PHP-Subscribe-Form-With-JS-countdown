//release date
var releaseDate = new Date('Dec 30, 2020 00:00:00');
//check for the interval
function interval(){
	var countdownSelector = document.querySelector("#countdown");
	var counterNumber = document.getElementsByClassName("counter-number");
	var counterBox = document.getElementsByClassName("counter-box");
	//get current time
	var currentDate = new Date().getTime();
	var duration = releaseDate - currentDate;
	var days 	= Math.floor(duration / (24 * 60 * 60 * 1000));
	var hours 	= Math.floor(duration % (24 * 60 * 60 * 1000) / (60 * 60 * 1000));
	var mins 	= Math.floor(duration % (60 * 60 * 1000) / (60 * 1000));
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
var interval = setInterval(interval, 1000);

function closeInterval(){
	clearInterval(interval);
}