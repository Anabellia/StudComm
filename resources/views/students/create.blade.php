@extends('layouts.app')

@section('content')



<!--     aaaaa -->
    <script src="{{ asset('jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('jquery-ui.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('jquery-ui.min.css') }}" >


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
            <div id="gender-group" class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                    <label for="gender" class="col-md-4 control-label">Gender: </label>
                            <div class="col-md-6">
                                <input id="female" type="radio" name="gender" value="Female" {{ (old('sex') == 'female') ? 'checked' : '' }} > Female
                                <input id="male" type="radio" name="gender" value="Male" {{ (old('sex') == 'male') ? 'checked' : '' }} > Male
                                <input id="other" type="radio" name="gender" value="Others" {{ (old('sex') == 'other') ? 'checked' : '' }} > Other
                                                @if ($errors->has('gender'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('gender') }}</strong>
                                                    </span>
                                                @endif
                            </div>
                        
            </div>

            <!-- slider -->
            <div><label for="amount">Student grade in general(from 1-5): </label>
            <input type="text" id="amount" name="Introduction" value="amount" readonly style="border:0; color:#f6931f; font-weight:bold;"></div>
            <div id="slider-range-max"></div>
            
            
            
            <!-- grade ovde bi mi lepshe pasao slider ... -->
            <label for="grade">Student grade in your opinion (1-10):</label>
            <select name="grade" id="grade">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <br>
            <!-- about student - about_student -->
            <br>
            <label for="about_student">Add some notes about this student(optional):</label>
            <input type="text" id="about_student" name="about_student"></input>
            <br>
            
            <!-- categories -->
            <!-- <fieldset>
            <label>Categories</label><br />            
            <input type="checkbox" name="categories[]" value="Introduction">Introduction<br />
            <input type="checkbox" name="categories[]" value="Behavior">Behavior<br />
            <input type="checkbox" name="categories[]" value="Speaking">Speaking<br />
            <input type="checkbox" name="categories[]" value="Reading">Reading<br />
            <input type="checkbox" name="categories[]" value="Writing">Writing<br />
            <input type="checkbox" name="categories[]" value="Listening">Listening<br />
            <input type="checkbox" name="categories[]" value="Comprehension">Comprehension<br />
            <input type="checkbox" name="categories[]" value="Subject">Subject<br />
            <input type="checkbox" name="categories[]" value="Conclusion ">Conclusion <br />           
            </fieldset> -->




            <!-- submit button -->
            <input type="submit" value="Submit new student">
        </form>

    </div>

</div>

@endsection
            


 