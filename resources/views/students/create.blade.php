@extends('layouts.app')

@section('content')

<!--     aaaaa -->
    <script src="{{ asset('jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('jquery-ui.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('jquery-ui.min.css') }}" >


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
	</script> -->
   

<!--     aaaaa -->



<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

    
    <!-- ja pobriso defoult gluposti i dodao samo ovo -->
    <div class="wrapper create-students">
    
        <h1>Create new student</h1>
        <form action="/students" method="POST">
            @csrf           

            <!-- name of the student -->
            <label for="name">Student name:</label>
            <input type="text" id="name" name="name"></input>
            <br>

            <!--radiobutton -->
            <!-- <div id="gender-group" class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}"> -->
                    <label for="gender" class="col-md-2 control-label">Gender: </label>
                            <!-- <div class="col-md-6"> -->
                                <input id="female" type="radio" name="gender" value="Female"> Female 
                                <input id="male" type="radio" name="gender" value="Male"> Male
                                <!-- <input id="other" type="radio" name="gender" value="Others"> Other -->
                                               <!--  @if ($errors->has('gender'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('gender') }}</strong>
                                                    </span>
                                                @endif
                            </div>
                        
            </div>
             -->
            <!--OVDE IMPORTING RANGE BLADE SA SLIDERIMA -->
            <div>
                @include('sliders.range')
            </div>

            <!--about student - about_student -->
            <br>
            <label for="about_student">Add some notes about this student(optional):</label>
            <input type="text" id="about_student" name="about_student"></input>
            <br>

            <!-- submit button -->
            <input type="submit" value="Submit new student">
        </form>

    </div>

</div>

@endsection
            


 