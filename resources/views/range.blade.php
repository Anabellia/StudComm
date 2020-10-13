<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Slider</title>
  
	<!-- ja --> 
	<!-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> 
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->

    <!-- opet probam jquery -->
<!-- 	<script src="{{ asset('jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('jquery-ui.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('jquery-ui.min.css') }}" > -->


	<!-- <script>
		$( function() {
			$( "#slider-range-max" ).slider({
			range: "max",
			min: 0,
			max: 5,
			//defoult
			value: 2,
			slide: function( event, ui ) {
				$( "#amount" ).val( ui.value );
			}
			});
			$( "#amount" ).val( $( "#slider-range-max" ).slider( "value" ) );
		} );
	</script>
</head> -->








<body>
 
	<p>
		<label for="amount">Student grade: </label>
		<input type="text" id="amount" name="Introduction" value="start" readonly style="border:0; color:#f6931f; font-weight:bold;">
	</p>
	
	<div id="slider-range-max"></div>
	
	<!-- <button onclick="send()">Click me</button>
	<script>
		function send(){	
			var start = $('#amount').val();
			
			
			alert(start);	
		}
	
	</script>  -->
 
</body>
</html>