<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
	<button id="test">button</button>
<script type="text/javascript">
	//simple example by using jq+dom to retreive JSON record
	//lookup developer tools->console to see what you need to retreive in formatted view
	//.xxx.xxx to select the data inside "xxx" column
	//[i] array accessor to select which record, barely [0] should be the latest record
	//hkma api should be legimit and easy to use https://apidocs.hkma.gov.hk/documentation/market-data-and-statistics/monthly-statistical-bulletin/er-ir/er-eeri-daily/
	//change console.log function to other things we need
	//no need api key

	$(function(){
		$('#test').click(function(){
			var test;
			$.getJSON("https://api.hkma.gov.hk/public/market-data-and-statistics/monthly-statistical-bulletin/er-ir/er-eeri-daily", function(result){
				 console.log(result.result.records[0]);
			});
		});
	});
</script>
</body>
</html>