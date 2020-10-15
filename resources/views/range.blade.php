	<!-- slider 1 Introduction -->
	
	<script>
		$( function() {
			$( "#slider-range-max" ).slider({
			range: "max",
			min: 0,
			max: 5,
			//defoult
			value: {{$student->Introduction}},
			slide: function( event, ui ) {
				$( "#amount" ).val( ui.value );
			}
			});
			$( "#amount" ).val( $( "#slider-range-max" ).slider( "value" ) );
		} );
	</script>

	<div><label for="amount">Student Introduction (from 1-5): </label>
    <input type="text" id="amount" name="Introduction" value="amount" readonly style="border:0; color:#f6931f; font-weight:bold;"></div>
    <div id="slider-range-max"></div>   <br /> 

		<!-- slider 2-->
		<script>
		$( function() {
			$( "#slider-range-max1" ).slider({
			range: "max",
			min: 0,
			max: 5,
			//defoult
			value: 2,
			slide: function( event, ui ) {
				$( "#Behavior" ).val( ui.value );
			}
			});
			$( "#Behavior" ).val( $( "#slider-range-max" ).slider( "value" ) );
		} );
	</script>

	<div><label for="amount">Student Behavior(from 1-5): </label>
    <input type="text" id="Behavior" name="Behavior" value="Behavior" readonly style="border:0; color:#f6931f; font-weight:bold;"></div>
    <div id="slider-range-max1"></div>  