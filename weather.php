<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<button id="test">button</button>
<script>
	//simple example by using jq+dom to retreive JSON record
	//lookup developer tools->console to see what you need to retreive in formatted view
	//.xxx.xxx to select the data inside "xxx" column
	//[i] array accessor to select which record, barely [0] should be the latest record
	//Accuweather api should be legimit and easy to use https://www.programmableweb.com/api/accuweather-forecast
	//link below is gaining the location key(step 1) by query string and use the location key to retrieve destination weather
	//step 2 link http://dataservice.accuweather.com/forecasts/v1/daily/1day/LOCATION_KEY
	//as i remember free api could only retrieve the !!!next date!!! weather but should be enough for just "demo use"
	//change console.log function to other things we need
	//api key: HGjt6xCAGv1u0S7x2BQOJo7arz0suS7F

	$(function(){
		$("#test").click(function(){
			var test;
			$.getJSON("http://dataservice.accuweather.com/locations/v1/cities/search?apikey=HGjt6xCAGv1u0S7x2BQOJo7arz0suS7F&q=hong%20kong", function(result){
				test = result[0].Key;
				console.log(test);
			});
		});
	});
</script>

</body>
</html>