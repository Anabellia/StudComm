@extends('layouts.app')

@section('content')

<!--     aaaaa -->
    <script src="{{ asset('jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('jquery-ui.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('jquery-ui.min.css') }}" >


	
               <!-- slider -->
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

<!--     aaaaa -->



<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

    
    <!-- ja pobriso defoult gluposti i dodao samo ovo -->
    <div class="wrapper create-students">
    
        <h1>Edit student</h1>
        <form action="/students/{{$student->id}}" method="POST">
            @csrf           
            @method('PATCH')
            <!-- name of the student -->
            <label for="name" >Student name:</label>
            <input type="text" id="name" name="name" value="{{$student->name}}"></input>
            <br>
            <p>{{$student->gender}}</p>
            <!--radiobutton -->
            <div id="gender-group" class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                        <label for="gender" class="col-md-4 control-label">Gender: </label>
                            <div class="col-md-6">                
                                <input id="female" type="radio" name="gender" value="Female" {{$student->gender == 'Female' ? 'checked' : ''}}> Female
                                <input id="male" type="radio" name="gender" value="Male" {{$student->gender == 'Male' ? 'checked' :''}} > Male
                                <input id="other" type="radio" name="gender" value="Others" {{$student->gender == 'Others' ? 'checked' : ''}}> Other
                                                @if ($errors->has('gender'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('gender') }}</strong>
                                                    </span>
                                                @endif
                            </div>
                        
            </div>
            <!-- about student - about_student -->
            <br>
            <label for="about_student">Add some notes about this student(optional):</label>
            <input type="text" id="about_student" name="about_student"></input>
            <br>

                    <!--(label=for AHA input=id) -->
            <div><label for="Introduction">Student Introduction(from 1-5): </label>
            <input type="text" id="Introduction" name="Introduction" value="Introduction" readonly style="border:0; color:#f6931f; font-weight:bold;"></div>
            <div id="Introduction-max"></div>  
            <br>
            <br>       

                    <!--(behavior petljaus) -->
                    <div><label for="Behavior">Student Behavior(from 1-5): </label>
            <input type="text" id="Behavior" name="Behavior" value="Behavior" readonly style="border:0; color:#f6931f; font-weight:bold;"></div>
            <div id="Behavior-max"></div>   
            <br>
            <br> 



            
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

            <!-- submit button -->
            <input type="submit" value="Edit student">
        </form>

    </div>

</div>

@endsection
            


 