jQuery(document).ready(function($) {
  $.ajax({
  url : "http://api.wunderground.com/api/9f736e3015c376c4/forecast/q/MN/Grand_Meadow.json",
  dataType : "jsonp",
  success : function(parsed_json) {
  var forecast = parsed_json['forecast']['simpleforecast']['forecastday'];
  var i = 1;
  for (index in forecast){
	  var icon = forecast[index]['icon_url'];
	  var weekday = forecast[index]['date']['weekday'];
	  var date = forecast[index]['date']['month'] + "/" + forecast[index]['date']['day'];
	  var precip = forecast[index]['pop'] + "% Precipitation";
	  var high = "High " + forecast[index]['high']['fahrenheit'] + "F";
	  var low = "Low " + forecast[index]['low']['fahrenheit'] + "F";
	  
	  $("#img" + i).attr('src', icon);
	  $("#weekday" + i).html(weekday);
	  $("#date" + i).html(date);
	  $("#precip" + i).html(precip);
	  $("#high" + i).html(high);
	  $("#low" + i).html(low);
	  
	  i++;
  }
  }
  });
});