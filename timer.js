document.getElementById('timer').innerHTML = 05 + ":" + 01; // start at 5 minutes + 1 second, since 1 second is so fast when the page loads that it would ''start'' at 4:59 to the user's perspective
startTimer();

function startTimer() {
var presentTime = document.getElementById('timer').innerHTML;
var timeArray = presentTime.split(/[:]+/);
var m = timeArray[0];
var s = checkSecond((timeArray[1] - 1));
if(s==59){m=m-1}
if(m<0){m=0; s="00";} // if time is depleted, do nothing

document.getElementById('timer').innerHTML =
m + ":" + s;
setTimeout(startTimer, 1000);
}

function checkSecond(sec) {
if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
if (sec < 0) {sec = "59"};
return sec;
}
