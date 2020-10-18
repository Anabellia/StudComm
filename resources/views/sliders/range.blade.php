	<!-- slider 0 GRADE IN GENERAL -->
	
<script>
			$( function() {
				$( "#GRADE-max" ).slider({
				range: "max",
				min: 0,
				max: 5,
				//defoult
				value: 2,
				slide: function( event, ui ) {
					$( "#grade" ).val( ui.value );
				}
				});
				$( "#grade" ).val( $( "#GRADE-max" ).slider( "value" ) );
			} );
</script>

			<div><label for="grade">GRADE your student in general from 1-5:</label>			 
    		<input type="text" id="grade" name="grade" value="grade" readonly style="border:0; color:#f6931f; font-weight:bold;"></div>
    		<div id="GRADE-max"></div>

	<!--######################################################################-->	

	<!-- slider 1 Introduction -->	
<script>
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

			<div><label for="amount">Student Introduction (from 1-5): </label>
    		<input type="text" id="amount" name="Introduction" value="amount" readonly style="border:0; color:#f6931f; font-weight:bold;"></div>
    		<div id="slider-range-max"></div> 

			<!--######################################################################-->	

		<!-- slider 2 Behavior-->
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
				$( "#Behavior" ).val( $( "#slider-range-max1" ).slider( "value" ) );
			} );
</script>

			<div><label for="amount">Student Behavior(from 1-5): </label>
    		<input type="text" id="Behavior" name="Behavior" value="Behavior" readonly style="border:0; color:#f6931f; font-weight:bold;"></div>
    		<div id="slider-range-max1"></div>

			<!--######################################################################-->	


<!-- slider  for Speaking-->
<script>
			$( function() {
				$( "#Speaking-max" ).slider({
				range: "max",
				min: 0,
				max: 5,
				//defoult
				value: 2,
				slide: function( event, ui ) {
					$( "#Speaking" ).val( ui.value );
				}
				});
				$( "#Speaking" ).val( $( "#Speaking-max" ).slider( "value" ) );
    		} );
</script>
            <!--Student Speaking  -->
			<div><label for="Speaking">Student Speaking(from 1-5): </label>
            <input type="text" id="Speaking" name="Speaking" value="Speaking" readonly style="border:0; color:#f6931f; font-weight:bold;"></div>
            <div id="Speaking-max"></div>

		<!--######################################################################-->	


<!-- slider  for Reading-->
<script>
			$( function() {
				$( "#Reading-max" ).slider({
				range: "max",
				min: 0,
				max: 5,
				//defoult
				value: 2,
				slide: function( event, ui ) {
					$( "#Reading" ).val( ui.value );
				}
				});
				$( "#Reading" ).val( $( "#Reading-max" ).slider( "value" ) );
    		} );
</script>
            <!--Student Reading  -->
			<div><label for="Reading">Student Reading(from 1-5): </label>
            <input type="text" id="Reading" name="Reading" value="Reading" readonly style="border:0; color:#f6931f; font-weight:bold;"></div>
            <div id="Reading-max"></div>


		<!--######################################################################-->	


<!-- slider  for Writing-->
<script>
			$( function() {
				$( "#Writing-max" ).slider({
				range: "max",
				min: 0,
				max: 5,
				//defoult
				value: 2,
				slide: function( event, ui ) {
					$( "#Writing" ).val( ui.value );
				}
				});
				$( "#Writing" ).val( $( "#Writing-max" ).slider( "value" ) );
    		} );
</script>
            <!--Student Writing  -->
			<div><label for="Writing">Student Writing(from 1-5): </label>
            <input type="text" id="Writing" name="Writing" value="Writing" readonly style="border:0; color:#f6931f; font-weight:bold;"></div>
            <div id="Writing-max"></div>


			<!--######################################################################-->	


<!-- slider  for Listening-->
<script>
			$( function() {
				$( "#Listening-max" ).slider({
				range: "max",
				min: 0,
				max: 5,
				//defoult
				value: 2,
				slide: function( event, ui ) {
					$( "#Listening" ).val( ui.value );
				}
				});
				$( "#Listening" ).val( $( "#Listening-max" ).slider( "value" ) );
    		} );
</script>
            <!--Student Listening  -->
			<div><label for="Listening">Student Listening(from 1-5): </label>
            <input type="text" id="Listening" name="Listening" value="Listening" readonly style="border:0; color:#f6931f; font-weight:bold;"></div>
            <div id="Listening-max"></div>


		<!--######################################################################-->	


<!-- slider  for Comprehension-->
<script>
			$( function() {
				$( "#Comprehension-max" ).slider({
				range: "max",
				min: 0,
				max: 5,
				//defoult
				value: 2,
				slide: function( event, ui ) {
					$( "#Comprehension" ).val( ui.value );
				}
				});
				$( "#Comprehension" ).val( $( "#Comprehension-max" ).slider( "value" ) );
    		} );
</script>
            <!--Student Comprehension  -->
			<div><label for="Comprehension">Student Comprehension(from 1-5): </label>
            <input type="text" id="Comprehension" name="Comprehension" value="Comprehension" readonly style="border:0; color:#f6931f; font-weight:bold;"></div>
            <div id="Comprehension-max"></div>


		<!--######################################################################-->	


<!-- slider  for Subject-->
<script>
			$( function() {
				$( "#Subject-max" ).slider({
				range: "max",
				min: 0,
				max: 5,
				//defoult
				value: 2,
				slide: function( event, ui ) {
					$( "#Subject" ).val( ui.value );
				}
				});
				$( "#Subject" ).val( $( "#Subject-max" ).slider( "value" ) );
    		} );
</script>
            <!--Student Subject  -->
			<div><label for="Subject">Student Subject(from 1-5): </label>
            <input type="text" id="Subject" name="Subject" value="Subject" readonly style="border:0; color:#f6931f; font-weight:bold;"></div>
            <div id="Subject-max"></div>


		<!--######################################################################-->	


<!-- slider  for Conclusion-->
<script>
			$( function() {
				$( "#Conclusion-max" ).slider({
				range: "max",
				min: 0,
				max: 5,
				//defoult
				value: 2,
				slide: function( event, ui ) {
					$( "#Conclusion" ).val( ui.value );
				}
				});
				$( "#Conclusion" ).val( $( "#Conclusion-max" ).slider( "value" ) );
    		} );
</script>
            <!--Student Conclusion  -->
			<div><label for="Conclusion">Student Conclusion(from 1-5): </label>
            <input type="text" id="Conclusion" name="Conclusion" value="Conclusion" readonly style="border:0; color:#f6931f; font-weight:bold;"></div>
            <div id="Conclusion-max"></div>
  





