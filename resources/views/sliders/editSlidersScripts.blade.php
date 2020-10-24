<!--     aaaaa -->
	<script src="{{ asset('jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('jquery-ui.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('jquery-ui.min.css') }}" >

<!--######################################################################-->	


                	<!-- slider 0 GRADE in general -->
				<script>
		        $( function() {
		        	$( "#GRADE-max" ).slider({
		        	range: "max",
		        	min: 0,
		        	max: 5,
		        	//defoult
		        	value: {{$student->grade}},
		        	slide: function( event, ui ) {
		        		$( "#grade" ).val( ui.value );
		        	}
		        	});
		        	$( "#grade" ).val( $( "#GRADE-max" ).slider( "value" ) );
		        } );
	        </script>	
                    
            	<!--######################################################################-->	
	
               <!-- Introduction -->
               <script>
		        $( function() {
		        	$( "#Introduction-max" ).slider({
		        	range: "max",
		        	min: 0,
		        	max: 5,
		        	//defoult
		        	value: {{$student->Introduction}},
		        	slide: function( event, ui ) {
		        		$( "#Introduction" ).val( ui.value );
		        	}
		        	});
		        	$( "#Introduction" ).val( $( "#Introduction-max" ).slider( "value" ) );
		        } );
	        </script>


                <!-- slider moj petljaus (ovaj gore radi ok) -->
                <script>
		        $( function() {
		        	$( "#Behavior-max" ).slider({
		        	range: "max",
		        	min: 0,
		        	max: 5,
		        	//defoult
		        	value: {{$student->Behavior}},
		        	slide: function( event, ui ) {
		        		$( "#Behavior" ).val( ui.value );
		        	}
		        	});
		        	$( "#Behavior" ).val( $( "#Behavior-max" ).slider( "value" ) );
		        } );
	        </script>           

<!--######################################################################-->	


<!-- slider  for Speaking-->
<script>
			$( function() {
				$( "#Speaking-max" ).slider({
				range: "max",
				min: 0,
				max: 5,
				//defoult
				value: {{$student->Speaking}},
				slide: function( event, ui ) {
					$( "#Speaking" ).val( ui.value );
				}
				});
				$( "#Speaking" ).val( $( "#Speaking-max" ).slider( "value" ) );
    		} );
</script>

            <!-- slider  for Reading-->
<script>
			$( function() {
				$( "#Reading-max" ).slider({
				range: "max",
				min: 0,
				max: 5,
				//defoult
				value: {{$student->Reading}},
				slide: function( event, ui ) {
					$( "#Reading" ).val( ui.value );
				}
				});
				$( "#Reading" ).val( $( "#Reading-max" ).slider( "value" ) );
    		} );
</script>
           
		<!--######################################################################-->	

            		<!--######################################################################-->	


<!-- slider  for Writing-->
<script>
			$( function() {
				$( "#Writing-max" ).slider({
				range: "max",
				min: 0,
				max: 5,
				//defoult
				value: {{$student->Writing}},
				slide: function( event, ui ) {
					$( "#Writing" ).val( ui.value );
				}
				});
				$( "#Writing" ).val( $( "#Writing-max" ).slider( "value" ) );
    		} );
</script>


			<!--######################################################################-->	
            <!-- slider  for Listening-->
<script>
			$( function() {
				$( "#Listening-max" ).slider({
				range: "max",
				min: 0,
				max: 5,
				//defoult
				value: {{$student->Listening}},
				slide: function( event, ui ) {
					$( "#Listening" ).val( ui.value );
				}
				});
				$( "#Listening" ).val( $( "#Listening-max" ).slider( "value" ) );
    		} );
</script>
		<!--######################################################################-->	

            <!-- slider  for Comprehension-->
<script>
			$( function() {
				$( "#Comprehension-max" ).slider({
				range: "max",
				min: 0,
				max: 5,
				//defoult
				value: {{$student->Comprehension}},
				slide: function( event, ui ) {
					$( "#Comprehension" ).val( ui.value );
				}
				});
				$( "#Comprehension" ).val( $( "#Comprehension-max" ).slider( "value" ) );
    		} );
</script>

		<!--######################################################################-->	

            <!-- slider  for Subject-->
<script>
			$( function() {
				$( "#Subject-max" ).slider({
				range: "max",
				min: 0,
				max: 5,
				//defoult
				value: {{$student->Subject}},
				slide: function( event, ui ) {
					$( "#Subject" ).val( ui.value );
				}
				});
				$( "#Subject" ).val( $( "#Subject-max" ).slider( "value" ) );
    		} );
</script>
		<!--######################################################################-->	

<!-- slider  for Conclusion-->
<script>
			$( function() {
				$( "#Conclusion-max" ).slider({
				range: "max",
				min: 0,
				max: 5,
				//defoult
				value: {{$student->Conclusion}},
				slide: function( event, ui ) {
					$( "#Conclusion" ).val( ui.value );
				}
				});
				$( "#Conclusion" ).val( $( "#Conclusion-max" ).slider( "value" ) );
    		} );
</script>