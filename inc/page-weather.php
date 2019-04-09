<?php

get_header(); ?>

<div class="new">
  <div id="container" class="container-fluid" >
  
<div class="date-time">
  <div class="date">
    <div id="day"></div>
    <div id="date"></div>
    <div id="month"></div>
   </div>
   <div id ="time"> </div>
</div>
  <div class="icon"> 
   <i class="wi"></i>
   <div id="description">Loading ... </div>
 </div>
    
  <div class='temp'>  
    <div class="sep"></div>
    <div id ="temperature"> </div> 
    <div class="sep"></div>
    <div id ="cfToggle"> C / F </div>
  </div>  
 
 <div id ="windHumidity">
    <div class="windspeed">
   <img class="windspeed-icon" src="data:image/png;base64,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">   
<div id="windSpeed"></div> </div>
  
 <div class="windspeed">
<img class="humidity-icon" src="data:image/png;base64,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">
<div id="humidity"></div>
   </div></div>
    
 <div class="sep"></div>
 <div id="location"></div>
  
</div>
</div>

  <a class="credit year" href="https://tolka.io"> &copy dee bryant </a>
  <a class="credit" href="https://icons8.com">Icon pack by Icons8 </a>
<a class="credit" href="http://erikflowers.github.io/weather-icons/">Erik Flowers Icons</a>


<style>
body {
  margin: 0;
  padding: 0;
  border: 0;
  height: 100VH;
  width: 100%;
  font-family: "Poppins", sans-serif;
  font-size: 14px;
}

.new {
  height: 100%;
  width: 100%;
  background: #FFFFFF;
  display: flex;
  align-items: center;
  justify-content: center;
}

.container-fluid {
  display: flex;
  align-items: center;
  align-content: center;
  flex-direction: column;
  width: 30%;
  min-width: 300px;
  height: 90%;
  color: white;
  background: #8FD1D8;
}

.temp {
  display: flex;
  flex-direction: column;
  align-items: center;
  flex-grow: 1;
  margin-bottom: 40px;
}
.temp #temperature {
  font-size: 700%;
}

#cfToggle {
  background: none;
  border: none;
  margin-top: 10px;
}
#cfToggle:hover {
  color: #1b484d;
}

.icon {
  margin-top: 40px;
  flex-grow: 1;
  width: auto;
}

.icon .wi {
  font-size: 6em;
}

#description {
  font-size: 1em;
  margin-bottom: 10px;
}

#stats {
  display: flex;
  align-items: row;
}

#tempArea {
  align-self: flex-start;
}

#location {
  font-size: 3em;
  align-self: flex-start;
}

.sep {
  border-top: 2px solid white;
  border-radius: 0.5em;
  height: 5px;
  width: 100%;
}

#windHumidity, .date-time {
  display: flex;
  justify-content: space-between;
  width: 100%;
  margin-bottom: 10px;
}

.date-time {
  margin-top: 20px;
}

.date {
  display: flex;
}
.date div {
  margin: 0 3px;
}

.humidity-icon, .windspeed-icon {
  height: 20px;
  width: 20px;
}

.windspeed {
  display: flex;
}
.windspeed img {
  margin: 0 5px;
}

.credit {
  text-align: center;
  display: block;
}
.credit:hover {
  color: #1b484d;
}
</style>

<script>
var tempCelsius,tempFarenheit, iconID ;
var firstState = true;


var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

var days = [ "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

function daily() {
  var dateFull = new Date();
  var today = days[dateFull.getDay()];
  jQuery('#day').empty().append(today);
  var date = dateFull.getDate();
  jQuery('#date').empty().append(date);
  var month = months[dateFull.getMonth()];
  jQuery('#month').empty().append(month);
  var time = dateFull.toLocaleTimeString();
  jQuery('#time').empty().append(time);
  var year = dateFull.getFullYear()
  jQuery("a.credit.year").append(year);
}


function findUserLocation() {
   //get long & lat
navigator.geolocation.getCurrentPosition(function(position) {
    var lat = position.coords.latitude, lon = position.coords.longitude;
  console.log(lat, lon);
  getWeather(lat, lon);
    });
  };


function getWeather(lat, lon) {
    var req = new XMLHttpRequest(); //
    req.open("GET", "https://fcc-weather-api.glitch.me/api/current?lat=" + lat + "&lon=" + lon, false);
    req.send(); //send API request
    var responseArr = JSON.parse(req.responseText); //parse the response
    console.log(responseArr);
    tempCelsius = Math.round(responseArr.main.temp);
    tempFarenheit = Math.round(((tempCelsius) * 1.8) + 32); //tempFaren *** required
    console.log(tempCelsius, "tempCelsius");
    var iconID = (responseArr.weather[0].id); //get the icon ID **** required
    var groupId = (iconID.toString()).charAt(0);
    var location = (responseArr.name); //get the location ID **** required
    var humidity = (responseArr.main.humidity) + "%";
    var windspeed = Math.round(((responseArr.wind.speed)* 3.6)) + "km/h";
  var description = responseArr.weather[0].description;
  description = description[0].toUpperCase() + description.substring(1);

  
//load the screen
  jQuery(document).ready(function(){
      toggleTemp();
      jQuery("#location").text(location);
      jQuery("#windSpeed").text(windspeed);
      jQuery("#humidity").text(humidity);
      jQuery("#description").text(description); 
    });
  
switch(groupId) {
    case "8":
        jQuery("i.wi").addClass("wi-cloudy");
        break;
    case "7":
       jQuery("i.wi").addClass("wi-fog");
        break;
    case "6":
        jQuery("i.wi").addClass("wi-snow");
        break;
    case "5":
         jQuery("i.wi").addClass("wi-showers");
        break;
    case "4":
         jQuery("i.wi").addClass("wi-cloudy");
        break;
    case "3":
       jQuery("i.wi").addClass("wi-sprinkle");
        break;
    case "2":
         jQuery("i.wi").addClass("wi-thunderstorm");
        break;
    case "1":
         jQuery("i.wi").addClass("wi-day-sunny");
        break;
    default:
         jQuery("i.wi").addClass("wi-thunderstorm");
}

  }
function toggleTemp() {

 if (firstState == true) {
   jQuery('#temperature').empty().append(tempCelsius + "C");
    firstState = false;
 }
    else
     {
       jQuery('#temperature').empty().append(tempFarenheit + "F");
       firstState = true;
     }
}
findUserLocation();
daily();
document.getElementById("cfToggle").addEventListener("click", toggleTemp, false);
</script>