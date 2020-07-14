
// For updating copywrite info every year

var today = new Date();
var months    = ['January','February','March','April','May','June','July','August','September','October','November','December'];
var thisMonth = months[today.getMonth()];
var date = thisMonth + " " + today.getDate() + ", " + today.getFullYear();
var time = today.getHours() + ":" + today.getMinutes();

var d = document.getElementById('today');
d.innerHTML = "Date: " + date;

var t = document.getElementById('time');
t.innerHTML = "Current time: " + time;

// Home page greeting
var hourNow = today.getHours();
var greeting;

if (hourNow > 18) {
    greeting = "Good Evening";
}
else if (hourNow > 12) {
    greeting = "Good Afternoon";
}
e


